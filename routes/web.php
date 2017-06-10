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
