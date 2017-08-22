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

Route::get('/', function () {return view('pages/home');});
Route::get('faq', function(){return view('pages/faq');});
Route::get('/admin', 'InquiryController@index');
Route::get('/inquiries/index', 'InquiryController@index');
Route::resource('inquiries','InquiryController');
Route::resource('users','UserController');

Route::get('about','ControllerPages@about');
Route::get('contact','ControllerPages@contact');

