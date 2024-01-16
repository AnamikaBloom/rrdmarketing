<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\UserPackage;
use App\Models\User;
use App\Models\DailyPackageBenefit;
use App\Models\Wallet;

class calculateDailyPackageBenefits extends Command
{

    public $days = 369;
    public $status = '0';
    public $date;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:calculateDailyPackageBenefits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is use to calculate the daily benefits amount of user based on package.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->date = date("Y-m-d");
        // $this->date = '2023-09-06';
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $allPackages = UserPackage::where('product_order_status', $this->status)->with('Package')->get();

        foreach ($allPackages as $el) {
            // Calculate the difference in days between the current date and created date
            $createdDate = date("Y-m-d", strtotime($el->created_at));
            $currentDate = $this->date;
            $dayDifference = strtotime($currentDate) - strtotime($createdDate);
            $dayDifference = $dayDifference / (60 * 60 * 24);

            // Check if the difference in days is less than current date
            if ($currentDate > $createdDate && $dayDifference < $this->days) {
                // Get the latest  record for the user, package and order
                $getLatestBenefit = DailyPackageBenefit::where('user_id', $el->user_id)
                    ->where('package_id', $el->package_id)
                    ->where('order_id', $el->order_id)
                    ->whereDate('created_at', $this->date)
                    ->orderBy('created_at', 'desc')
                    ->first();

                // Calculate the previous date
                $previousDate = date("Y-m-d", strtotime($this->date . ' -1 day'));

                // Get the record for the previous day
                $getPreviousBenefit = DailyPackageBenefit::where('user_id', $el->user_id)
                    ->where('package_id', $el->package_id)
                    ->where('order_id', $el->order_id)
                    ->whereDate('created_at', $previousDate)
                    ->orderBy('created_at', 'desc')
                    ->first();

                // Initialize previous and current amounts
                $previousAmount = 0;
                $currentAmount = $el->package->daily_profit_amount;

                // Update amounts if a previous benefit record exists
                if ($getPreviousBenefit != null) {
                    $previousAmount = $getPreviousBenefit->current_amount;
                    $currentAmount = $getPreviousBenefit->current_amount + $el->package->daily_profit_amount;
                }

                // Count all benefit records for the user, package, and order
                $getAllBenefits = DailyPackageBenefit::where('user_id', $el->user_id)
                    ->where('package_id', $el->package_id)
                    ->where('order_id', $el->order_id)
                    ->count();

                // Check if there is no latest benefit and the total benefits are less than current date
                if ($getLatestBenefit == null && $getAllBenefits < $this->days) {

                    $newRecord = new DailyPackageBenefit([
                        'user_id'         => $el->user_id,
                        'package_id'      => $el->package_id,
                        'order_id'        => $el->order_id,
                        'amount'          => $el->package->daily_profit_amount,
                        'previous_amount' => $previousAmount,
                        'current_amount'  => $currentAmount
                    ]);

                    $newRecord->save();
                    $this->addToWallet($el->user_id,$el->package->daily_profit_amount);
                }
            }
        }

        return 0;

    }


    public static function addToWallet($user_id,$amount){
        $wallet=Wallet::where('user_id',$user_id)->first();
        if($wallet){
            $wallet->amount+=$amount;
            $wallet->save();
        }else{
            $wallet=new Wallet();
            $wallet->user_id=$user_id;
            $wallet->amount=$amount;
            $wallet->status="Active";
            $wallet->save();

        }
    }

}
