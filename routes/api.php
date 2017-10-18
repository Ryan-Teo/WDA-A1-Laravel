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

//Route::group(['middleware' => 'cors'], function () {
//
//// List
//    Route::get('inquiryCRUD/list', 'InquiryCRUDController@index');
//
//// Show
//    Route::get('inquiryCRUD/{id}', 'InquiryCRUDController@show');
//
//// Store
//    Route::post('inquiryCRUD', 'InquiryCRUDController@store');
//
//// Update
//    Route::post('inquiryCRUD/{id}/update', 'InquiryCRUDController@update');
//
//// Delete
//    Route::get('inquiryCRUD/{id}/delete', 'InquiryCRUDController@destroy');
//});

Route::get('inquiryCRUD/list', ['middleware' => 'cors', 'uses'=>'InquiryCRUDController@index']);
Route::get('inquiryCRUD/{id}', ['middleware' => 'cors', 'uses'=>'InquiryCRUDController@show']);
Route::post('inquiryCRUD', ['middleware' => 'cors', 'uses'=>'InquiryCRUDController@store']);
Route::post('inquiryCRUD/{id}/update', ['middleware' => 'cors', 'uses'=>'InquiryCRUDController@update']);
Route::get('inquiryCRUD/{id}/delete', ['middleware' => 'cors', 'uses'=>'InquiryCRUDController@destroy']);

//Route::get('example', array('middleware' => 'cors', 'uses' => 'ExampleController@dummy'));