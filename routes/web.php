<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\auth\LoginController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\CategoryController;

use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\EnqueryController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\DriverController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\VehicleController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\PaymentManagmentController;
use App\Http\Controllers\admin\FleetController;
use App\Http\Controllers\admin\AirportTransferController;
use App\Http\Controllers\admin\AriaToAirportController;
use App\Http\Controllers\admin\BlogController as AdminBlogController;
use App\Http\Controllers\admin\ServiceController as AdminServiceController;
// use App\Http\Controllers\frontend\AirportTransfer;


use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\UserTicketController;
use App\Http\Controllers\frontend\VenderController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\FeetController;
use App\Http\Controllers\frontend\BlogController;

use App\Http\Controllers\driver\auth\LoginController as DriverLoginController;
use App\Http\Controllers\driver\dashboardController as DriverDashboardController;


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
//admin routes


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/airport-detail/{id}', [HomeController::class, 'airport_detail'])->name('airport_detail');


Route::get('/airport-detail/{pid}/{id}', [HomeController::class, 'airport_sub_detail'])->name('airport_sub_detail');







Route::get('/service-detail/{id}', [ServiceController::class, 'detail'])->name('service_detail');
Route::get('/aria-detail/{id}', [HomeController::class, 'aria_detail'])->name('aria_detail');
Route::get('/fleet', [FeetController::class, 'index'])->name('feet');
Route::get('/fleet-detail/{id}', [FeetController::class, 'detail'])->name('feet_detail');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-detail/{id}', [BlogController::class, 'detail'])->name('blog_detail');
Route::any('/contact-enquery', [HomeController::class, 'contact_enquery'])->name('contact_enquery');
Route::get('/terms-&-condition', [HomeController::class, 'term'])->name('term');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/legal-notice', [HomeController::class, 'legal'])->name('legal');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::any('/login-user', [HomeController::class, 'login_save'])->name('login_save');

Route::group(['middleware' => 'user'], function(){
    
});

Route::group(['middleware' => 'usernot'], function(){
    Route::get('/search', [UserTicketController::class, 'index'])->name('search');
    Route::get('/payment', [UserTicketController::class, 'payment'])->name('payment');
    Route::get('/ticket-details/{id}', [UserTicketController::class, 'ticket_details'])->name('ticket_details');
    Route::get('/reset_password/{id}', [VenderController::class, 'reset_password'])->name('reset_password');
    Route::any('/reset_password_save', [VenderController::class, 'reset_password_save'])->name('reset_password_save');
    Route::any('/select_date', [UserTicketController::class, 'select_date'])->name('select_date');
    Route::any('/slot_save', [UserTicketController::class, 'slot_save'])->name('slot_save');
    Route::any('/get-disabled-dates', [UserTicketController::class, 'getDisabledDates']);

});

Route::group(['middleware' => 'DriverAuth'], function () {
    Route::get('/driver-admin', [DriverLoginController::class, 'index'])->name('driverlogin');
    Route::post('/driver-admin/login-save', [DriverLoginController::class, 'save'])->name('driverloginsave');
    Route::get('/driver-register', [DriverLoginController::class, 'register'])->name('driverregister');
    Route::post('/driver-admin/register-save', [DriverLoginController::class, 'register_save'])->name('driverregistersave');
    Route::post('/driver-admin/login-save_image', [DriverLoginController::class, 'loginsaveimage'])->name('driverloginsaveimage');
});

Route::group(['prefix' => 'driver-admin', 'middleware' => 'DriverNotAuth'], function () {
    Route::get('/dashboard', [DriverDashboardController::class, 'index'])->name('driver_dashboard');
    Route::get('/change-password', [DriverLoginController::class, 'change_password'])->name('driver_change_password');
    Route::post('/change-password/save', [DriverLoginController::class, 'change_password_save'])->name('driver_change_password_save');
    Route::get('/view-profile', [DriverLoginController::class, 'view_profile'])->name('driver_view_profile');
    Route::post('/update-profile', [DriverLoginController::class, 'update_profile'])->name('driver_update_profile');
    Route::get('/logout', [DriverLoginController::class, 'logout'])->name('driverlogout');
});

Route::group(['middleware' => 'ifnotadmin'], function () {
    Route::get('/admin', [LoginController::class, 'index'])->name('adminlogin');
    Route::post('/admin/login-save', [LoginController::class, 'save'])->name('loginsave');
    Route::post('/admin/login-save_image', [LoginController::class, 'loginsaveimage'])->name('loginsaveimage');
});

Route::group(['prefix' => 'admin', 'middleware' => 'ifadmin'], function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('admin_dashboard');
    Route::get('/change-password', [LoginController::class, 'change_password'])->name('change_password');
    Route::post('/change-password/save', [LoginController::class, 'change_password_save'])->name('change_password_save');
    Route::get('/view-profile', [LoginController::class, 'view_profile'])->name('view_profile');
    Route::post('/update-profile', [LoginController::class, 'update_profile'])->name('update_profile');
    Route::get('/logout', [LoginController::class, 'logout'])->name('adminlogout');
    
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/setting-save', [SettingController::class, 'save'])->name('setting_save');

     /*---------------------Admin pages routes Start---------------------*/
     Route::get('/page/add/{id?}', [PageController::class, 'add'])->name('page_add');
     Route::post('/page/save/{id?}', [PageController::class, 'save'])->name('page_save');
     Route::get('/page', [PageController::class, 'index'])->name('page');
     Route::get('/page-data', [PageController::class, 'anydata'])->name('page_data');
     Route::get('/page/status', [PageController::class, 'changeStatus'])->name('page_status');
     /*-----------------------Admin pages routes End---------------------*/
 
     /*---------------------Admin Category routes Start---------------------*/
     Route::get('/category/add/{id?}', [CategoryController::class, 'add'])->name('category_add');
     Route::post('/category/save/{id?}', [CategoryController::class, 'save'])->name('category_save');
     Route::get('/category', [CategoryController::class, 'index'])->name('category');
     Route::any('/category-data', [CategoryController::class, 'anydata'])->name('category_data');
     Route::get('/category/delete', [CategoryController::class, 'delete'])->name('category_delete');
     Route::get('/category/status', [CategoryController::class, 'changeStatus'])->name('category_status');
     Route::get('/category_delete_image', [CategoryController::class, 'category_delete_image'])->name('category_delete_image');
     /*-----------------------Admin Category routes End---------------------*/

     /*---------------------Admin service routes Start---------------------*/
     Route::get('/service/add/{id?}', [AdminServiceController::class, 'add'])->name('service_add');
     Route::post('/service/save/{id?}', [AdminServiceController::class, 'save'])->name('service_save');
     Route::get('/service', [AdminServiceController::class, 'index'])->name('admin_service');
     Route::any('/service-data', [AdminServiceController::class, 'anydata'])->name('service_data');
     Route::get('/service/delete', [AdminServiceController::class, 'delete'])->name('service_delete');
     Route::get('/service/status', [AdminServiceController::class, 'changeStatus'])->name('service_status');
     Route::get('/service_delete_image', [AdminServiceController::class, 'service_delete_image'])->name('service_delete_image');
     /*-----------------------Admin service routes End---------------------*/

     /*---------------------Admin fleet routes Start---------------------*/
     Route::get('/fleet/add/{id?}', [FleetController::class, 'add'])->name('fleet_add');
     Route::post('/fleet/save/{id?}', [FleetController::class, 'save'])->name('fleet_save');
     Route::get('/fleet', [FleetController::class, 'index'])->name('fleet');
     Route::any('/fleet-data', [FleetController::class, 'anydata'])->name('fleet_data');
     Route::get('/fleet/delete', [FleetController::class, 'delete'])->name('fleet_delete');
     Route::get('/fleet/status', [FleetController::class, 'changeStatus'])->name('fleet_status');
     Route::get('/fleet_delete_image', [FleetController::class, 'fleet_delete_image'])->name('fleet_delete_image');
     /*-----------------------Admin fleet routes End---------------------*/

    /*---------------------Admin aria_to_airport routes Start---------------------*/
     Route::get('/aria_to_airport/add/{id?}', [AriaToAirportController::class, 'add'])->name('aria_to_airport_add');
     Route::post('/aria_to_airport/save/{id?}', [AriaToAirportController::class, 'save'])->name('aria_to_airport_save');
     Route::get('/aria_to_airport', [AriaToAirportController::class, 'index'])->name('aria_to_airport');
     Route::any('/aria_to_airport-data', [AriaToAirportController::class, 'anydata'])->name('aria_to_airport_data');
     Route::get('/aria_to_airport/delete', [AriaToAirportController::class, 'delete'])->name('aria_to_airport_delete');
     Route::get('/aria_to_airport/status', [AriaToAirportController::class, 'changeStatus'])->name('aria_to_airport_status');
     Route::get('/aria_to_airport_delete_image', [AriaToAirportController::class, 'aria_to_airport_delete_image'])->name('aria_to_airport_delete_image');
     /*-----------------------Admin aria_to_airport routes End---------------------*/

     /*---------------------Admin airport_transfers routes Start---------------------*/
     Route::get('/airport_transfers/add/{id?}', [AirportTransferController::class, 'add'])->name('airport_transfers_add');
     Route::post('/airport_transfers/save/{id?}', [AirportTransferController::class, 'save'])->name('airport_transfers_save');
     Route::get('/airport_transfers', [AirportTransferController::class, 'index'])->name('airport_transfers');
     Route::any('/airport_transfers-data', [AirportTransferController::class, 'anydata'])->name('airport_transfers_data');
     Route::get('/airport_transfers/delete', [AirportTransferController::class, 'delete'])->name('airport_transfers_delete');
     Route::get('/airport_transfers/status', [AirportTransferController::class, 'changeStatus'])->name('airport_transfers_status');
     Route::get('/airport_transfers_delete_image', [AirportTransferController::class, 'airport_transfers_delete_image'])->name('airport_transfers_delete_image');
     /*-----------------------Admin FAQ routes End---------------------*/


     /*---------------------Admin FAQ routes Start---------------------*/
     Route::get('/faq/add/{id?}', [FaqController::class, 'add'])->name('faq_add');
     Route::post('/faq/save/{id?}', [FaqController::class, 'save'])->name('faq_save');
     Route::get('/faq', [FaqController::class, 'index'])->name('faq');
     Route::any('/faq-data', [FaqController::class, 'anydata'])->name('faq_data');
     Route::get('/faq/delete', [FaqController::class, 'delete'])->name('faq_delete');
     Route::get('/faq/status', [FaqController::class, 'changeStatus'])->name('faq_status');
     Route::get('/faq_delete_image', [FaqController::class, 'faq_delete_image'])->name('faq_delete_image');
     /*-----------------------Admin FAQ routes End---------------------*/

     /*---------------------Admin Driver routes Start---------------------*/
     Route::get('/driver/add/{id?}', [DriverController::class, 'add'])->name('driver_add');
     Route::post('/driver/save/{id?}', [DriverController::class, 'save'])->name('driver_save');
     Route::get('/driver', [DriverController::class, 'index'])->name('driver');
     Route::any('/driver-data', [DriverController::class, 'anydata'])->name('driver_data');
     Route::get('/driver/delete', [DriverController::class, 'delete'])->name('driver_delete');
     Route::get('/driver/status', [DriverController::class, 'changeStatus'])->name('driver_status');
     Route::get('/driver_delete_image', [DriverController::class, 'driver_delete_image'])->name('faq_delete_image');
     /*-----------------------Admin Driver routes End---------------------*/

     /*---------------------Admin coupon routes Start---------------------*/
     Route::get('/coupon/add/{id?}', [CouponController::class, 'add'])->name('coupon_add');
     Route::post('/coupon/save/{id?}', [CouponController::class, 'save'])->name('coupon_save');
     Route::get('/coupon', [CouponController::class, 'index'])->name('coupon');
     Route::any('/coupon-data', [CouponController::class, 'anydata'])->name('coupon_data');
     Route::get('/coupon/delete', [CouponController::class, 'delete'])->name('coupon_delete');
     Route::get('/coupon/status', [CouponController::class, 'changeStatus'])->name('coupon_status');
     /*-----------------------Admin coupon routes End---------------------*/

      /*---------------------Admin Vehicle routes Start---------------------*/
      Route::get('/vehicle/add/{id?}', [VehicleController::class, 'add'])->name('vehicle_add');
      Route::post('/vehicle/save/{id?}', [VehicleController::class, 'save'])->name('vehicle_save');
      Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle');
      Route::any('/vehicle-data', [VehicleController::class, 'anydata'])->name('vehicle_data');
      Route::get('/vehicle/delete', [VehicleController::class, 'delete'])->name('vehicle_delete');
      Route::get('/vehicle/status', [VehicleController::class, 'changeStatus'])->name('vehicle_status');
      /*-----------------------Admin vehicle routes End---------------------*/

      /*---------------------Admin payment routes Start---------------------*/
      Route::get('/payment/add/{id?}', [PaymentManagmentController::class, 'add'])->name('payment_add');
      Route::post('/payment/save/{id?}', [PaymentManagmentController::class, 'save'])->name('payment_save');
      Route::get('/payment-managment', [PaymentManagmentController::class, 'index'])->name('payment');
      Route::any('/payment-data', [PaymentManagmentController::class, 'anydata'])->name('payment_data');
      Route::get('/payment/delete', [PaymentManagmentController::class, 'delete'])->name('payment_delete');
      Route::get('/payment/status', [PaymentManagmentController::class, 'changeStatus'])->name('payment_status');
      /*-----------------------Admin payment routes End---------------------*/

    /*---------------------Admin blog routes Start---------------------*/
     Route::get('/blog/add/{id?}', [AdminBlogController::class, 'add'])->name('blog_add');
     Route::post('/blog/save/{id?}', [AdminBlogController::class, 'save'])->name('blog_save');
     Route::get('/blog', [AdminBlogController::class, 'index'])->name('blog_admin');
     Route::any('/blog-data', [AdminBlogController::class, 'anydata'])->name('blog_data');
     Route::get('/blog/delete', [AdminBlogController::class, 'delete'])->name('blog_delete');
     Route::get('/blog/status', [AdminBlogController::class, 'changeStatus'])->name('blog_status');
     Route::get('/blog_delete_image', [AdminBlogController::class, 'blog_delete_image'])->name('blog_delete_image');
     /*-----------------------Admin blog routes End---------------------*/

     /*---------------------Admin User routes Start---------------------*/
     Route::get('/user/add/{id?}', [UserController::class, 'add'])->name('user_add');
     Route::post('/user/save/{id?}', [UserController::class, 'save'])->name('user_save');
     Route::get('/user', [UserController::class, 'index'])->name('user');
     Route::get('/user-data', [UserController::class, 'anydata'])->name('user_data');
     Route::get('/user/delete', [UserController::class, 'delete'])->name('user_delete');
     Route::get('/user/status', [UserController::class, 'changeStatus'])->name('user_status');
     Route::get('/user/detail/{id}', [UserController::class, 'detail'])->name('user_detail');
     Route::get('/user_delete_image', [UserController::class, 'user_delete_image'])->name('user_delete_image');
     /*-----------------------Admin User routes End---------------------*/

     /*---------------------Admin banner routes Start---------------------*/
     Route::get('/banner/add/{id?}', [BannerController::class, 'add'])->name('banner_add');
     Route::post('/banner/save/{id?}', [BannerController::class, 'save'])->name('banner_save');
     Route::get('/banner', [BannerController::class, 'index'])->name('banner');
     Route::any('/banner-data', [BannerController::class, 'anydata'])->name('banner_data');
     Route::get('/banner/delete', [BannerController::class, 'delete'])->name('banner_delete');
     Route::get('/banner/status', [BannerController::class, 'changeStatus'])->name('banner_status');
     /*-----------------------Admin banner routes End---------------------*/

      /*---------------------Admin officer routes Start---------------------*/
    Route::get('/testimonial/add/{id?}', [TestimonialController::class, 'add'])->name('testimonial_add');
    Route::post('/testimonial/save/{id?}', [TestimonialController::class, 'save'])->name('testimonial_save');
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
    Route::get('/testimonial-data', [TestimonialController::class, 'anydata'])->name('testimonial_data');
    Route::get('/testimonial/delete', [TestimonialController::class, 'delete'])->name('testimonial_delete');
    Route::get('/testimonial/status', [TestimonialController::class, 'changeStatus'])->name('testimonial_status');
    Route::get('/testimonial/detail/{id}', [TestimonialController::class, 'detail'])->name('testimonial_detail');
    Route::get('/testimonial_delete_image', [TestimonialController::class, 'testimonial_delete_image'])->name('testimonial_delete_image');
    /*-----------------------Admin officer routes End---------------------*/

     Route::get('/contact-enquery', [EnqueryController::class, 'contact_request'])->name('admin_contact_enquery');
     Route::any('/contact-enquery-data', [EnqueryController::class, 'contact_request_data'])->name('admin_contact_enquery_data');
     Route::any('/delete-enquery', [EnqueryController::class, 'delete'])->name('delete_enquery');
     Route::any('/contact-data/view_message', [EnqueryController::class, 'view_message'])->name('view_message');

     


});