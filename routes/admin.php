<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdminAboutusController;

use App\Http\Controllers\Admin\AdminKycController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminWaletController;
use App\Http\Controllers\Admin\AdminWTotalMembersController;

use App\Http\Controllers\Admin\AdminIncomeController;
use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\AdminIdCardController;
use App\Http\Controllers\Admin\AdminPackageController;
use App\Http\Controllers\Admin\AdminReportController;
use App\Http\Controllers\Admin\AdminBankListController;
use App\Http\Controllers\Admin\AdminInvoiceController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminComplaintController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminControllAccessController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminContactUsController;
use App\Http\Controllers\Admin\AdminRankController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\TermsController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\NewAdminController;
use App\Http\Controllers\Admin\PinController;
use App\Http\Controllers\Admin\RepurchageController;
use App\Http\Controllers\Admin\GenealogyController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Controllers\Admin\GrievanceRedressalsController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//admin
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [HomeController::class, 'adminlogin'])->name('admin-login');
    Route::post('/logins', [HomeController::class, 'logins'])->name('admin-logins');

    Route::get('/forgot', [HomeController::class, 'forgot'])->name('admin-forgot');

    Route::group(['middleware' => ('auth:admin')], function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin-dashboard');
        Route::get('/logout', [HomeController::class, 'logout'])->name('admin-logout');

        Route::resources([
            // '/kyc' => AdminKycController::class,
            '/orders' => AdminOrderController::class,
            '/wallet' => AdminWaletController::class,
            '/total-members' => AdminWTotalMembersController::class,
            '/income' => AdminIncomeController::class,
            '/packages' => AdminPackageController::class,
            '/id-card' => AdminIdCardController::class,
            '/user-bank-list' => AdminBankListController::class,
            '/repurchage' => RepurchageController::class,
        ]);

        // Banners
        Route::get('/banner', [BannerController::class, 'allBanner'])->name('banner');
        Route::get('/add-banner', [BannerController::class, 'addBanner'])->name('add.banner');



        // Accounts
        Route::get('/fund-request', [AdminAccountController::class, 'fundrequest'])->name('fund-request');
        Route::post('/fund-request-status', [AdminAccountController::class, 'fundrequeststatus'])->name('fund-request-status');
        Route::get('/fund-request-delete/{id}', [AdminAccountController::class, 'fundrequestdelete'])->name('fund-request-delete');
        Route::get('/fund-transaction', [AdminAccountController::class, 'fundtransaction'])->name('fund-transaction');

        Route::get('/rank', [AdminRankController::class, 'index'])->name('admin-rank');
        Route::post('/rank', [AdminRankController::class, 'add']);
        Route::get('/edit-rank/{slug}', [AdminRankController::class, 'edit'])->name('admin-edit-rank');
        Route::post('/update-rank', [AdminRankController::class, 'update'])->name('admin-update-rank');
        Route::get('/delete-rank/{id}', [AdminRankController::class, 'delete'])->name('admin-delete-rank');


        // Report
        Route::get('/sales-report', [AdminReportController::class, 'salesreport'])->name('sales-report');
        Route::get('/form-16', [AdminReportController::class, 'form16'])->name('form-16');
        Route::get('/form16view', [AdminReportController::class, 'form16view']);

        Route::get('/edit-bank-details', [HomeController::class, 'editbankdetails']);

        // Invoice
        Route::get('/add-invoice', [AdminInvoiceController::class, 'addinvoice'])->name('add-invoice');
        Route::get('/invoice-listing', [AdminInvoiceController::class, 'invoicelisting'])->name('invoice-listing');
        Route::get('/invoice/{order_id}', [AdminInvoiceController::class, 'downloadinvoice'])->name('download-invoice');
        Route::get('/generate-invoice/{order_id}', [AdminInvoiceController::class, 'generateinvoice'])->name('generate-invoice');

        // Controll Access
        Route::get('/view-control-access', [AdminControllAccessController::class, 'index'])->name('admin-view-control-access');
        Route::get('/add-control-access', [AdminControllAccessController::class, 'create'])->name('admin-add-control-access');
        Route::post('/add-control-access', [AdminControllAccessController::class, 'store']);
        Route::get('/edit-control-access/{id}', [AdminControllAccessController::class, 'edit'])->name('admin-edit-control-access');
        Route::post('/edit-control-access/{id}', [AdminControllAccessController::class, 'update']);
        Route::get('/view-all-control-access/{id}', [AdminControllAccessController::class, 'show'])->name('admin-view-all-control-access');
        Route::get('/delete-all-control-access/{id}', [AdminControllAccessController::class, 'destroy'])->name('admin-delete-all-control-access');

        Route::get('/privacy-policy', [HomeController::class, 'privacypolicy']);
        Route::get('/terms-condition', [HomeController::class, 'termscondition']);


        // Route::get('/update-package', [HomeController::class, 'updatepackage']);
        // Route::get('/register', [HomeController::class, 'register']);
        // Route::get('/login', [HomeController::class, 'login']);
        // Route::get('/reset', [HomeController::class, 'reset']);

        //category
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::get('/add-category', [CategoryController::class, 'add'])->name('add-category');
        Route::post('/add-category', [CategoryController::class, 'create']);
        Route::get('/edit-category/{slug}', [CategoryController::class, 'edit'])->name('admin-edit-category');
        Route::post('/edit-category/{slug}', [CategoryController::class, 'update']);
        Route::get('/delete-category/{slug}', [CategoryController::class, 'destroy'])->name('delete-category');

        // Admin Aboutus
        Route::get('/aboutus/index', [AdminAboutusController::class, 'index'])->name('aboutus-index');
        Route::get('/aboutus/create', [AdminAboutusController::class, 'create'])->name('aboutus-create');
        Route::post('/aboutus/create', [AdminAboutusController::class, 'store'])->name('aboutus-store');
        Route::get('/aboutus/edit', [AdminAboutusController::class, 'edit'])->name('aboutus-edit');
        Route::post('/aboutus/edit', [AdminAboutusController::class, 'update'])->name('aboutus-update');
        Route::post('/aboutus/delete', [AdminAboutusController::class, 'destroy'])->name('aboutus-delete');

        // Admin Profile
        Route::get('/admin-profile', [AdminProfileController::class, 'adminprofile'])->name('admin-profile');
        Route::post('/profile-update', [AdminProfileController::class, 'profileupdate'])->name('admin-profile-update');
        Route::post('/change-password', [AdminProfileController::class, 'changepassword'])->name('admin-change-password');

        // Testimonials
        Route::get('/testimonials/index', [TestimonialController::class, 'index'])->name('testimonials-index');
        Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials-create');
        Route::post('/testimonials/create', [TestimonialController::class, 'store'])->name('testimonials-store');
        Route::post('/testimonials/delete', [TestimonialController::class, 'destroy'])->name('testimonials-delete');
        Route::get('/testimonials/edit', [TestimonialController::class, 'edit'])->name('testimonials-edit');
        Route::post('/testimonials/update', [TestimonialController::class, 'update'])->name('testimonials-update');

        //Blogs
        Route::get('/blogs/index', [AdminBlogController::class, 'index'])->name('blogs-index');
        Route::get('/blog/create', [AdminBlogController::class, 'create'])->name('add-blog');
        Route::post('/blog/create', [AdminBlogController::class, 'store']);
        Route::get('/edit-blog/{id}', [AdminBlogController::class, 'edit'])->name('edit-blog');
        Route::post('/edit-blog/{id}', [AdminBlogController::class, 'update']);
        Route::get('/delete-blog/{id}', [AdminBlogController::class, 'destroy'])->name('delete-blog');
        //faq
        Route::get('/faq/index', [FaqController::class, 'index'])->name('faq-index');
        Route::get('/faq/create', [FaqController::class, 'create'])->name('add-faq');
        Route::post('/faq/create', [FaqController::class, 'store']);
        Route::get('faq/edit-/{id}', [FaqController::class, 'edit'])->name('edit-faq');
        Route::post('faq/edit-/{id}', [FaqController::class, 'update']);
        Route::get('faq/delete-/{id}', [FaqController::class, 'destroy'])->name('delete-faq');

        // Reward
        Route::get('/reward/index', [AdminContactUsController::class, 'reward'])->name('reward-index');

        // Contact US
        Route::get('/contactus/index', [AdminContactUsController::class, 'index'])->name('contactus-index');
        Route::post('/contactus/delete{id}', [AdminContactUsController::class, 'destroy'])->name('contact-destroy');

        // Bank Details
        Route::get('/user-bank-list', [AdminBankListController::class, 'index'])->name('admin-userbanklist');
        Route::post('/user-bank-list/delete', [AdminBankListController::class, 'destroy'])->name('admin-userbanklist-delete');
        Route::post('/user-bank-list', [AdminBankListController::class, 'update']);

        //user List
        Route::get('/user-list', [UserController::class, 'index'])->name('admin-user-list');
        Route::get('/genealogy/{id}', [UserController::class, 'genealogy'])->name('admin-genelogy-view');
        Route::get('/child-genealogy/{memberId}', [UserController::class, 'child_genealogy'])->name('admin-child-genealogy');

        // Genealogy Tree
        Route::get('/genealogy/{id}', [GenealogyController::class, 'genealogy'])->name('user-genealogy');
        Route::get('/user/child-genealogys/{memberId}', [GenealogyController::class, 'child_genealogy'])->name('child-geneology');

        // Complaint
        Route::get('/view-complaint', [AdminComplaintController::class, 'viewcomplaint'])->name('view-complaint');
        Route::get('/update-complaint', [AdminComplaintController::class, 'updatecomplaint'])->name('update-complaint');
        Route::post('/complaints/update', [AdminComplaintController::class, 'update'])->name('complaints');

// Subcategory
Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('subcategory');
Route::get('/add-sub-category', [SubCategoryController::class, 'add'])->name('add-subcategory');
Route::post('/add-sub-category', [SubCategoryController::class, 'create']);
Route::get('/edit-sub-category/{id}', [SubCategoryController::class, 'edit'])->name('edit-subcategory');
Route::post('/edit-sub-category/{id}', [SubCategoryController::class, 'update']);
Route::get('/delete-sub-category{id}', [SubCategoryController::class, 'delete'])->name('delete-subcategory');
/*Ajax */
Route::post('/get-subcategory-bycategory', [AjaxController::class, 'subCategory'])->name('get-sub-category');
Route::post('/get-childcategory-bysubcategory', [AjaxController::class, 'childCategory'])->name('get-child-category');
Route::post('/get-size', [AjaxController::class, 'size'])->name('get-size');
//child category
Route::get('/child-category', [ChildCategoryController::class, 'index'])->name('child-category');
Route::get('/add-child-category', [ChildCategoryController::class, 'add'])->name('add-child-category');
Route::post('/add-child-category', [ChildCategoryController::class, 'create']);
Route::get('/edit-child-category/{id}', [ChildCategoryController::class, 'edit'])->name('edit-child-category');
Route::post('/edit-child-category/{id}', [ChildCategoryController::class, 'update']);
Route::get('/delete-child-category/{id}', [ChildCategoryController::class, 'destroy'])->name('delete-child-category');


//color
Route::get('/color', [ColorController::class, 'index'])->name('colors');
Route::get('/add-color', [ColorController::class, 'create'])->name('add-color');
Route::post('/add-color', [ColorController::class, 'store']);
Route::get('/edit-color/{slug}', [ColorController::class, 'edit'])->name('edit-color');
Route::post('/edit-color/{slug}', [ColorController::class, 'update']);
Route::get('/delete-color/{slug}', [ColorController::class, 'destroy'])->name('delete-color');

//size
Route::get('/size', [SizeController::class, 'index'])->name('sizes');
Route::get('/add-size', [SizeController::class, 'create'])->name('add-size');
Route::post('/add-size', [SizeController::class, 'store']);
Route::get('/edit-size/{slug}', [SizeController::class, 'edit'])->name('edit-size');
Route::post('/edit-size/{slug}', [SizeController::class, 'update']);
Route::get('/delete-size/{slug}', [SizeController::class, 'destroy'])->name('delete-size');
//product
Route::get('/product', [ProductController::class, 'index'])->name('products');
Route::get('/add-product', [ProductController::class, 'add'])->name('add-product');
Route::post('/add-product', [ProductController::class, 'create']);
Route::get('/edit-product/{slug}', [ProductController::class, 'edit'])->name('edit-product');
Route::post('/edit-product/{slug}', [ProductController::class, 'update']);
Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');

// Kyc
Route::get('/kyc', [AdminKycController::class, 'index'])->name('kyc');
Route::get('/kyc/{id}', [AdminKycController::class, 'view'])->name('admin-kyc-view');
Route::post('/kyc', [AdminKycController::class, 'update']);
//packages
Route::get('/package', [AdminPackageController::class, 'index'])->name('package');
Route::post('/package', [AdminPackageController::class, 'add']);
Route::get('/edit-package/{slug}', [AdminPackageController::class, 'edit'])->name('admin-edit-package');
Route::post('/edit-package/{slug}', [AdminPackageController::class, 'update']);
Route::get('/delete-package/{id}', [AdminPackageController::class, 'delete'])->name('admin-delete-package');
Route::get('/purchase-package-admin', [AdminPackageController::class, 'purchasePackage']);
//banner
Route::get('/banner', [BannerController::class, 'index'])->name('banner');
Route::get('/add-banner', [BannerController::class, 'add'])->name('add-banner');
Route::post('/add-banner', [BannerController::class, 'create']);
Route::get('/edit-banner/{id}', [BannerController::class, 'edit'])->name('admin-edit-banner');
Route::post('/edit-banner/{id}', [BannerController::class, 'update']);
Route::get('/delete-banner/{id}', [BannerController::class, 'delete'])->name('admin-delete-banner');

Route::get('terms/index', [TermsController::class, 'index'])->name('terms-index');
Route::get('terms/create', [TermsController::class, 'create'])->name('terms-create');
Route::post('terms/create', [TermsController::class, 'store'])->name('terms-store');
Route::get('terms/edit{id}', [TermsController::class, 'edit'])->name('terms-edit');
Route::post('terms/update{id}', [TermsController::class, 'update'])->name('terms-update');
Route::post('terms/destroy/{id}', [TermsController::class, 'delete'])->name('terms-destroy');
//Privacy
Route::get('privacy/index', [PrivacyController::class, 'index'])->name('privacy-index');
Route::get('privacy/create', [PrivacyController::class, 'create'])->name('privacy-create');
Route::post('privacy/create', [PrivacyController::class, 'store'])->name('privacy-store');
Route::get('privacy/edit{id}', [PrivacyController::class, 'edit'])->name('privacy-edit');
Route::post('privacy/update{id}', [PrivacyController::class, 'update'])->name('privacy-update');
Route::post('privacy/destroy/{id}', [PrivacyController::class, 'delete'])->name('privacy-destroy');

//GrievanceRedressals
Route::get('grievanceredressals/index', [GrievanceRedressalsController::class, 'index'])->name('grievance-redressals-index');
Route::get('grievanceredressals/create', [GrievanceRedressalsController::class, 'create'])->name('grievance-redressals-create');
Route::post('grievanceredressals/create', [GrievanceRedressalsController::class, 'store'])->name('grievance-redressals-store');
Route::get('grievanceredressals/edit{id}', [GrievanceRedressalsController::class, 'edit'])->name('grievance-redressals-edit');
Route::post('grievanceredressals/update{id}', [GrievanceRedressalsController::class, 'update'])->name('grievance-redressals-update');
Route::post('grievanceredressals/destroy/{id}', [GrievanceRedressalsController::class, 'delete'])->name('grievance-redressals-destroy');

//Refund/Cancelled Policy
Route::get('refund/index', [RefundController::class, 'index'])->name('refund-index');
Route::get('refund/create', [RefundController::class, 'create'])->name('refund-create');
Route::post('refund/create', [RefundController::class, 'store'])->name('refund-store');
Route::get('refund/edit{id}', [RefundController::class, 'edit'])->name('refund-edit');
Route::post('refund/update{id}', [RefundController::class, 'update'])->name('refund-update');
Route::post('refund/destroy/{id}', [RefundController::class, 'delete'])->name('refund-destroy');
//complaints


Route::get('/view-control-users', [NewAdminController::class, 'index'])->name('admin-view-control-users');
Route::get('/add-control-users', [NewAdminController::class, 'create'])->name('admin-add-control-users');
Route::post('/add-control-users', [NewAdminController::class, 'store']);
Route::get('/edit-control-users/{id}', [NewAdminController::class, 'edit'])->name('admin-edit-control-users');
Route::post('/edit-control-users/{id}', [NewAdminController::class, 'update']);
Route::get('/delete-control-users/{id}', [NewAdminController::class, 'destroy'])->name('admin-delete-control-users');

// Pin Generation
Route::get('/pin-list', [PinController::class, 'index'])->name('pin-list');
Route::post('/pin-list', [PinController::class, 'save']);

        // Id card
        Route::get('/id-card', [AdminIdcardController::class, 'index'])->name('idcard');
        Route::get('/id-card-view/{id}', [AdminIdcardController::class, 'view'])->name('admin-idcard-view');
    });

});
