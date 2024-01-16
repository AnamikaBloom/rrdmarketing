<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;


use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\KYCController;
use App\Http\Controllers\user\AboutusController;
use App\Http\Controllers\user\BlogController;
use App\Http\Controllers\user\BankController;
use App\Http\Controllers\user\AccountsController;
use App\Http\Controllers\user\BusinessController;
use App\Http\Controllers\user\ComplaintController;
use App\Http\Controllers\user\GenealogyController;
use App\Http\Controllers\user\MyIdCardController;
use App\Http\Controllers\user\MywishlistController;
use App\Http\Controllers\user\OrderController;
use App\Http\Controllers\user\ProductController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\ReportController;
use App\Http\Controllers\user\WalletController;
use App\Http\Controllers\user\PackageController;
use App\Http\Controllers\user\ContactUsController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\jobs\RankManagementController;
use App\Http\Controllers\jobs\RewardController;
use App\Http\Controllers\jobs\RoyaltyRewardController;
use App\Http\Controllers\user\AwardsRewardsController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('daily-benefits', function() {
    Artisan::call('command:calculateDailyPackageBenefits');
    return "Updated!";
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    echo ('link storage done');
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    echo 'migrated';
});
Route::get('/optimize', function () {
    Artisan::call('optimize');
    echo 'optimized';
});

Route::group(['namespace'=>'jobs', 'prefix' => 'jobs'], function () {
	Route::get('create-rank', [RankManagementController::class,'index']);
	Route::get('create-rewards', [RewardController::class,'index']);
	Route::get('create-royalty-rewards', [RoyaltyRewardController::class,'index']);
});
// Route::get('about-us', [WelcomeController::class, 'about']);
Route::get('faq', [WelcomeController::class, 'faq'])->name('faq');
Route::get('privacy-policy', [WelcomeController::class, 'privacy'])->name('privacy');
Route::get('grievance-redressals', [WelcomeController::class, 'GrievanceRedressals'])->name('grievanceredressals');
Route::get('refund-policy', [WelcomeController::class, 'refund'])->name('refund');
Route::get('terms-and-conditions', [WelcomeController::class, 'terms'])->name('terms');

Route::get('products', [WelcomeController::class, 'product'])->name('web-products');
Route::get('products/{slug}', [WelcomeController::class, 'subcategoryproduct'])->name('sub-products');
Route::get('product-details/{slug}', [WelcomeController::class, 'productdetails'])->name('product-details');
Route::get('our-service', [WelcomeController::class, 'service'])->name('our-service');
Route::get('videos-gallery', [WelcomeController::class, 'gallery'])->name('videos-gallery');


// Aboutus webpage
Route::get('/aboutus',[AboutusController::class,'index'])->name('aboutus');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog-details/{slug}', [WelcomeController::class, 'blogdetails'])->name('blog-details');


// Route::get('login', [WelcomeController::class, 'login']);
// Route::get('register', [WelcomeController::class, 'register']);
Route::get('account', [WelcomeController::class, 'account'])->name('account');
Route::get('change-password', [WelcomeController::class, 'changepassword']);





//User
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [HomeController::class, 'userStore']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/logins', [HomeController::class, 'logins'])->name('login-post');

Route::get('/generate-wallet',[HomeController::class,'generatewallet'])->name('user-wallet');

Route::get('/reset', [HomeController::class, 'reset'])->name('reset');

Route::group(['prefix' => 'user'], function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('index');
        Route::get('/logout', [HomeController::class, 'logout'])->name('user.logout');


        // User Profile
        Route::get('/profile', [ProfileController::class, 'userprofile'])->name('profile');
        Route::get('/pin-generation', [ProfileController::class, 'pinGeneration'])->name('pin-generation');
        Route::post('user/changepassword',[ProfileController::class,'updatePassword'])->name('update-password');
          // User Profile
          Route::get('/user-profile', [ProfileController::class, 'userprofile'])->name('user-profile');
          Route::post('/profile-update',[ProfileController::class,'profileupdate'])->name('user-profile-update');
          Route::post('/change-password',[ProfileController::class,'changepassword'])->name('user-change-password');

        // Bank
        Route::get('/add-bank', [BankController::class, 'create'])->name('add-bank');
        Route::post('/add-bank', [BankController::class, 'store']);
        Route::get('/bank-details', [BankController::class, 'index'])->name('bank-details');
        Route::post('/update-bank', [BankController::class, 'updateBankDetails'])->name('bank-update');

        // contact Us



        // Package
        Route::get('/package', [PackageController::class, 'index'])->name('user-package');
        Route::post('/package', [PackageController::class, 'buyPackage']);


        Route::get('/package-orderPlaced', [PackageController::class,'orderPlaced'])->name('package-order-placed');

        // Genealogy Tree
        Route::get('/genealogy', [GenealogyController::class, 'genealogy'])->name('genealogy');
        Route::post('/genealogy-search', [GenealogyController::class, 'genealogySearch'])->name('genealogy-search');
        Route::get('/child-genealogy/{memberId}', [GenealogyController::class, 'child_genealogy'])->name('child-genealogy');

        Route::get('/forgot', [HomeController::class, 'forget'])->name('forget');





        Route::get('/products', [ProductController::class, 'products'])->name('repurchage-products');
        Route::get('/product-details/{slug}', [ProductController::class, 'productDetails'])->name('repurchage-productDetails');
        Route::get('/cart', [ProductController::class, 'repurchageCart'])->name('repurchage-cart');
        Route::post('/cart', [ProductController::class, 'checkOut']);
        Route::get('/repurchage-orderPlaced', [ProductController::class,'orderPlaced'])->name('repurchage-order-placed');

        // Route::get('/product-details/{slug}', [ProductController::class, 'productDetails'])->name('repurchage-productDetails');

        Route::get('/orders', [OrderController::class, 'orders'])->name('orders');

        Route::get('/my-wishlist', [MywishlistController::class, 'myWishlist'])->name('myWishlist');

        Route::get('/view-business', [BusinessController::class, 'viewBusiness'])->name('viewBusiness');
        Route::get('/direct-team', [BusinessController::class, 'directTeam'])->name('directTeam');
        Route::get('/total-team', [BusinessController::class, 'totalTeam'])->name('totalTeam');
        Route::get('/view-ceiling', [BusinessController::class, 'viewCeiling'])->name('viewCeiling');
        Route::get('/Payouts', [BusinessController::class, 'payouts'])->name('payouts');

        Route::get('/wallet', [WalletController::class, 'wallet'])->name('wallet');
        Route::post('/wallet-request', [WalletController::class, 'walletrequest'])->name('wallet-request');

        Route::get('/fund-transaction', [AccountsController::class, 'fundTransaction'])->name('fundTransaction');
        Route::get('/fund-request', [AccountsController::class, 'fundRequest'])->name('fundRequest');



        // Id Card
        Route::get('/id-card', [MyIdCardController::class, 'idCard'])->name('idCard');

        Route::get('/form-16', [ReportController::class, 'form16'])->name('form16');


        Route::get('/add-complaint', [ComplaintController::class, 'addComplaint'])->name('addComplaint');
        Route::post('/complaint/save', [ComplaintController::class, 'complaint_store'])->name('complaint-save');

        Route::get('/view-complaint', [ComplaintController::class, 'viewComplaint'])->name('viewComplaint');

        Route::get('/orderPlaced', [CartController::class,'orderPlaced'])->name('order-placed');

        Route::get('/awards-and-rewards', [AwardsRewardsController::class,'index'])->name('awards&rewards');
    });
    Route::get('/add-kyc', [KYCController::class, 'create'])->name('add.kyc');
    Route::post('/add-kyc', [KYCController::class, 'store']);
    Route::post('/update-kyc', [KYCController::class, 'update'])->name('update.kyc');
    Route::get('/KYC', [KYCController::class, 'index'])->name('user-kyc');
    //cart


});
 //cart



 Route::get('/checkout', [CartController::class, 'showCheckout'])->name('checkOut');
 Route::post('/checkout', [CartController::class, 'checkOut']);
 Route::get('/cart', [CartController::class, 'cart'])->name('cart');
 Route::post('add-to-cart', [CartController::class,'addToCart'])->name('add-to-cart');
 Route::get('inc/{id}/session_id/{session_id}', [CartController::class,'increaseCartQuantity']);
 Route::get('dec/{id}/session_id/{session_id}', [CartController::class,'decreaseCartQuantity']);
 Route::get('del/{id}/session_id/{session_id}', [CartController::class,'deleteCartQuantity']);

 Route ::post('/get-city-state',[WelcomeController::class,'get_City_State'])->name('pincode');

 Route::get('pay-success', [PackageController::class, 'response'])->name('payment.success');
 Route::post('/paytm-callback',[PackageController::class, 'paytmCallback'])->name('paytm.callback');
 //Callback
 Route::post('/repurchage-product-callback',[ProductController::class, 'response'])->name('repurchage-product-callback');
 Route::get('/product/list', [WelcomeController::class, 'productlist'])->name('product-list');
Route::post('/search/product', [WelcomeController::class, 'searchproduct'])->name('search-product');

Route::get('/cotactus',[ContactUsController::class,'index'])->name('contactus');
Route::post('/user/contactus', [ContactUsController::class, 'store'])->name('user-contact');
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    echo('link storage done');
});

Route::get('/package-list',[PackageController::class,'index']);
