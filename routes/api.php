<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'cors'], function () {

// List
    Route::get('inquiryCRUD/list', 'InquiryCRUDController@index');

// Show
    Route::get('inquiryCRUD/{id}', 'InquiryCRUDController@show');

// Store
    Route::post('inquiryCRUD', 'InquiryCRUDController@store');

// Update
    Route::post('inquiryCRUD/{id}/update', 'InquiryCRUDController@update');

// Delete
    Route::get('inquiryCRUD/{id}/delete', 'InquiryCRUDController@destroy');
});
