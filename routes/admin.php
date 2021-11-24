<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DecisionController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\IssueController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use Illuminate\Support\Facades\Route;



Route::get('admin/home',[AdminController::class,'index'])->name('adminhome');
Route::GET('admin',[LoginController::class,'showLoginForm'])->name('admin.login');
Route::POST('admin',[LoginController::class,'login']);
Route::POST('logout',[LoginController::class,'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {


//Admins 
Route::resource('admins', AdminsController::class);
Route::post('admins_status',[AdminsController::class,'adminsStatus'])->name('admins.status');

//roles 
Route::resource('roles', RoleController::class);

//settings
Route::get('setting',[SettingController::class,'index'])->name('setting');
Route::post('setting',[SettingController::class,'update'])->name('updatesetting');

//about_us
Route::get('about',[AboutController::class,'index'])->name('about');
Route::post('about',[AboutController::class,'update'])->name('updateabout');

//our team 
Route::resource('team', TeamController::class);
Route::post('team_status',[TeamController::class,'teamStatus'])->name('team.status');

//faq
Route::resource('faq', FaqController::class);
Route::post('faq_status',[FaqController::class,'faqStatus'])->name('faq.status');

//banners
Route::resource('banner', BannerController::class);
Route::post('banner_status',[BannerController::class,'bannerStatus'])->name('banner.status');

//our customers 
Route::resource('customer', CustomerController::class);
Route::post('customer_status',[CustomerController::class,'customerStatus'])->name('customer.status');

//blog
Route::resource('blog', BlogController::class);
Route::post('blog_status',[BlogController::class,'blogStatus'])->name('blog.status');

//new
Route::resource('new', NewsController::class);
Route::post('new_status',[NewsController::class,'newStatus'])->name('new.status');

//issue
Route::resource('issue', IssueController::class);
Route::post('issue_status',[IssueController::class,'issueStatus'])->name('issue.status');

//decision
Route::resource('decision', DecisionController::class);
Route::post('decision_status',[DecisionController::class,'decisionStatus'])->name('decision.status');

//gallery
Route::resource('gallery', GalleryController::class);
Route::post('gallery_status',[GalleryController::class,'galleryStatus'])->name('gallery.status');

//our services 
Route::resource('service', ServiceController::class);
Route::post('service_status',[ServiceController::class,'serviceStatus'])->name('service.status');

//seo
Route::get('seo',[SeoController::class,'index'])->name('seo');
Route::post('seo',[SeoController::class,'update'])->name('updateseo');

//counter
Route::get('counter',[CounterController::class,'index'])->name('counter');
Route::post('counter',[CounterController::class,'update'])->name('updatecounter');
});

