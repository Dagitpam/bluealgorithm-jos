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
// Users route
Route::resource('/user-index','UsersController');
//Admin route
Route::get('/members','AdminController@members');
Route::get('/contacts','AdminController@contacts');
Route::resource('/admin-index','AdminController');
Route::get('/news','AdminController@news');
Route::post('/add-cert','AdminController@add_cert');
Route::get('/certificate','AdminController@certificate');
Route::resource('/add-news','AdminController');

// paystack payment
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
