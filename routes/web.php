<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    if (Auth::guest()) {
        return view('pages.index');
        
    }
    else {
        if (Auth::user()->role === "admin") {
            return redirect('/admin-index');
        }
        else if (Auth::user()->role === "user") {
            return redirect('/user-index');
        }
    }
    
});

Auth::routes();
Route::get('/mail','AdminController@sendMail');
Route::post('/login_control','LoginController@login_control');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/enrol','PagesController@create');
Route::get('/payment-page','PagesController@paymentPage');
Route::post('/procceed-enrol','PagesController@submitEnrolment');
Route::resource('/contact','PagesController');
Route::get('/blog','PagesController@blog');
Route::get('/verify','PagesController@certificate');
Route::post('/verify-certificate','PagesController@verify_cert');
Route::resource('/view-blog','PagesController');
Route::get('/view-cert','PagesController@view_cert');
Route::get('/application','PagesController@application');
Route::post('/store-application','PagesController@store_application')->name('store-application');
// Users route
Route::resource('/user-index','UsersController');
Route::post('/user-deposite','UsersController@deposite');
Route::get('/receipt','UsersController@receipt');
Route::get('/profile','UsersController@view_profile');
Route::post('/update-profile','UsersController@update_profile');
Route::post('/change-password','UsersController@change_password');
Route::post('/upload-image','UsersController@upload_image');
Route::get('/watch-video','UsersController@video');
Route::get('/pdf','UsersController@file');

//Admin route
Route::get('/members','AdminController@members');
Route::get('/contacts','AdminController@contacts');
Route::resource('/admin-index','AdminController');
Route::get('/news','AdminController@news');
Route::post('/add-cert','AdminController@add_cert');
Route::get('/certificate','AdminController@certificate');
Route::get('/deposite','AdminController@deposite');
Route::post('/approve_deposite','AdminController@approve_deposite');
Route::post('/delete_deposite','AdminController@delete_deposite');
Route::post('/deleteUser','AdminController@deleteUser');
Route::resource('/add-news','AdminController');
Route::post('/addVideo','AdminController@video_upload');
Route::post('/addFile','AdminController@file_upload');
Route::get('/file','AdminController@file');
Route::get('/video','AdminController@video');
Route::get('/applicants','AdminController@applicants');
Route::post('/addVideo','AdminController@video_upload');
Route::post('/deleteVideo','AdminController@destroy_video');
Route::post('/deleteFile','AdminController@destroy_file');
// paystack payment
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
