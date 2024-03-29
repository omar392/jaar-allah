<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('website');

Route::get('command', function () {
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    return "cache is cleared successfully !! ";
});

Auth::routes([
'register'=>false,
// 'login'=>false,
]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/',[HomeController::class,'index'])->name('website');
        Route::get('contact-us',[HomeController::class,'contactUs'])->name('contact.us');
        Route::post('/submit-form',[HomeController::class,'store'])->name('contact.store');
        Route::get('faqs',[HomeController::class,'faqs'])->name('front.faqs');
        Route::get('terms',[HomeController::class,'terms'])->name('front.terms');
        Route::get('about-us',[HomeController::class,'aboutUs'])->name('front.about');
        Route::get('our-team',[HomeController::class,'team'])->name('front.team');
        Route::get('gallery',[HomeController::class,'gallery'])->name('front.gallery');
        Route::get('services',[HomeController::class,'services'])->name('front.services');
        Route::get('services-details/{id}',[HomeController::class,'servicesDetails'])->name('front.services.details');
        Route::get('issues',[HomeController::class,'issues'])->name('front.issues');
        Route::get('issues-details/{id}',[HomeController::class,'issuesDetails'])->name('front.issues.details');
        Route::get('decisions',[HomeController::class,'decisions'])->name('front.decisions');
        Route::get('decisions-details/{id}',[HomeController::class,'decisionsDetails'])->name('front.decisions.details');
        Route::get('blog',[HomeController::class,'blog'])->name('front.blog');
        Route::get('blog-details/{id}',[HomeController::class,'blogDetails'])->name('front.blog.details');
        Route::post('/email-form',[HomeController::class,'email'])->name('email.store');
        Route::post('/submit-form',[HomeController::class,'store'])->name('contact.store');
    });