<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Package;
use App\Models\UserPackage;
use App\Models\MonthlyIncentive;
use App\Models\Wallet;

use App\Helpers\Helper;

class calculateMonthlyIncentive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:calculateMonthlyIncentive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is use to calculate monthly income of individual user on behalf of referred users.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->year = date("Y");
        $this->month = date("m");
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $package = Package::where('status', 1)->whereIn('amount', [12000, 25000])->pluck('id');

        $users = User::where('status','Active')->get();

        foreach($users as $user){

            $getLatestIncentive = MonthlyIncentive::where('user_id', $user->id)
                ->whereYear('created_at', $this->year)
                ->whereMonth('created_at', $this->month)
                ->orderBy('created_at', 'desc')
                ->first();

            if($getLatestIncentive == null){

                $l1 = Helper::getTree([$user->member_id]);
                $user1 = User::whereIn('member_id', $l1)->pluck('id')->toArray(); //getting user_id on behalf of member_id $l1
                $user_package1 = UserPackage::whereIn('user_id', $user1)->whereIn('package_id', $package)->where('product_order_status', '0')->count(); // getting user packages 

                $l2 = Helper::getTree($l1);
                $user2 = User::whereIn('member_id', $l2)->pluck('id')->toArray(); //getting user_id on behalf of member_id $l2
                $user_package2 = UserPackage::whereIn('user_id', $user2)->whereIn('package_id', $package)->where('product_order_status', '0')->count(); // getting user packages 

                $l3 = Helper::getTree($l2);
                $user3 = User::whereIn('member_id', $l3)->pluck('id')->toArray(); //getting user_id on behalf of member_id $l3
                $user_package3 = UserPackage::whereIn('user_id', $user3)->whereIn('package_id', $package)->where('product_order_status', '0')->count(); // getting user packages 

                $l4 = Helper::getTree($l3);
                $user4 = User::whereIn('member_id', $l4)->pluck('id')->toArray(); //getting user_id on behalf of member_id $l4
                $user_package4 = UserPackage::whereIn('user_id', $user4)->whereIn('package_id', $package)->where('product_order_status', '0')->count(); // getting user packages 

                $amount  = 0;
                // level 4 incentive calculation
                if($user_package4 >= 10000){
                    $amount = 50000;
                }
                
                // level 3 incentive calculation
                else if($user_package3 >= 1000 && $user_package3 < 10000){
                    $amount = 30000;
                }
                
                // level 2 incentive calculation
                else if($user_package2 >= 100 && $user_package2 < 1000){
                    $amount = 10000;
                }
                
                // level 1 incentive calculation
                else if($user_package1 >= 1 && $user_package1 < 100){
                    $amount = 10000;
                }
                // dd($amount);
                // saving data
                if($amount > 0){
                    $input = new MonthlyIncentive([
                        'user_id'         => $user->id,
                        'package_id'      => null,
                        'order_id'        => null,
                        'amount'          => $amount,
                        'previous_amount' => null,
                        'current_amount'  => null
                    ]);
                    $this->addToWallet($user->id,$amount);
    
                    $input->save();
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
