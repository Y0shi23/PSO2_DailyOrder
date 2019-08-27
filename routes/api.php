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
    
    
Route::group(['middleware' => ['api']], function(){
    // Route::resource('v1/pso2/dailyorder', 'Api\ArticlesController', ['except' => ['create', 'edit']]);
    // http://localhost:8080/api/v1/pso2/dailyorder
    Route::get('v1/pso2/dailyorder', 'Api\ArticlesController@index');
    Route::get('v1/pso2/dailyorder/tomorrow', 'Api\ArticlesController@tomorrow');
    Route::get('v1/kakugen', 'Api\KakugenController@index');
    Route::post('v1/kakugen/edit', 'Api\KakugenController@store');
             
});
