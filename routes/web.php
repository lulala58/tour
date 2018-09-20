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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//旅游路线
Route::get('/tour/line', 'home\TourController@line');
//旅游路线
Route::get('/tour/guid/{id}', 'home\TourController@guid');

//路线详情
Route::get('/tour/content/{id}', 'home\TourController@content');

//旅游攻略
Route::get('/tour/strategy', 'home\TourController@strategy');

//国内外攻略
Route::get('/tour/type/{id}', 'home\TourController@type');

//攻略详情
Route::get('/tour/detail/{id}','home\TourController@detail');

