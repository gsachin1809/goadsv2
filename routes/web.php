<?php

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


Route::get('/index','CustomerController@index');

Route::get('/myprofile','CustomerController@myprofile');
Route::get('/myprofile/update','CustomerController@update');
Route::post('/myprofile/uploadimage','CustomerController@uploadimage');
Route::post('/myprofile/update','CustomerController@store');

Route::get('/createads','CustomerController@createads');
Route::post('/createads/registration','CustomerController@adsregistration');
Route::post('/createads/newads','CustomerController@newads');
Route::post('/createads/payment','CustomerController@payment');
Route::post('/createads/make_payment','CustomerController@make_payment');
Route::post('/createads/package','CustomerController@package');
Route::post('/createads/package-payment','CustomerController@package_payment');

Route::get('/chat','CustomerController@chat')->name('customer/chat');
Route::get('/ads/view/{id}','CustomerController@showads');


Route::get('/myads','CustomerController@myads');

Route::get('/wallet', function () {
    return view('customer.wallet');
});


Route::get('/', function () {
    return view('index');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/howwework', function () {
    return view('howwework');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/traffic', function () {
    return view('traffic');
});
Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::get('/feedback', function () {
    return view('feedback');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
