<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Package;
use App\Models\UserPackage;
use App\Models\AwardReward;
use App\Models\Wallet;

class calculateAwardReward extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:calculateAwardReward';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is use to calculate Awards and rewards on behalf of user joined and and number of package sold to direct referrals.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // getting all users 
        $users = User::where('status','Active')->get();

        foreach ($users as $el) {
            // package list
            $package = Package::where('status', 1)->whereIn('amount', [12000, 25000])->pluck('id');

            // getting direct referrals of a $el user
            $direct_referrals = User::where('sponser_id',$el->member_id)->pluck('id');

            // getting package count against $direct_referrals
            $user_package = UserPackage::whereIn('user_id', $direct_referrals)->whereIn('package_id', $package)->where('product_order_status', '0')->count();
            
            if ($user_package >= 10 && $user_package < 15) {
                // checking if data exists 
                $previous_rewards_exist_1 = AwardReward::where('user_id', $el->id)
                    ->where('referral_count', '>=', 10)
                    ->where('referral_count', '<', 15)
                    ->exists();
                
                if (!$previous_rewards_exist_1) { //if not then creating data 
                    AwardReward::create([
                        'user_id' => $el->id,
                        'referral_count' => $user_package,
                        'award' => 'Multiplex movie 2 tickets'
                    ]);
                }
            }
            
            if ($user_package >= 15 && $user_package < 25) {
                // checking if data exists 
                $previous_rewards_exist_2 = AwardReward::where('user_id', $el->id)
                    ->where('referral_count', '>=', 15)
                    ->where('referral_count', '<', 25)
                    ->exists();
                
                if (!$previous_rewards_exist_2) { //if not then creating data 
                    AwardReward::create([
                        'user_id' => $el->id,
                        'referral_count' => $user_package,
                        'award' => 'Smart Phone'
                    ]);
                }
            }
            
            if ($user_package >= 25) {
                // checking if data exists 
                $previous_rewards_exist_3 = AwardReward::where('user_id', $el->id)
                    ->where('referral_count', '>=', 25)
                    ->exists();
                
                if (!$previous_rewards_exist_3) { //if not then creating data 
                    AwardReward::create([
                        'user_id' => $el->id,
                        'referral_count' => $user_package,
                        'award' => 'Mixer grinder'
                    ]);
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
