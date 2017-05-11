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

Route::get('/home', 'HomeController@index');
Route::get('/categories', 'CatController@index');
Route::get('/categories/indexv', 'CatController@index');
Route::get('/categories/listgoods/{id}', 'CatController@listgoods');
Route::get('/categories/listgoodsv/{id}', 'CatController@listgoods');
Route::get('/categories/create', 'CatController@create');
Route::post('/categories/store', 'CatController@store');
Route::get('/categories/edit/{id}', 'CatController@edit');
Route::delete('/categories/destroy/{id}', 'CatController@destroy');
Route::post('/categories/update/{id}', 'CatController@update');


Route::get('/goods/create', 'GoodController@create');
Route::post('/goods/store', 'GoodController@store');
Route::get('/goods/edit/{id}', 'GoodController@edit');
Route::post('/goods/update/{id}', 'GoodController@update');
Route::get('/goods/editv/{id}', 'GoodController@edit');
Route::post('/goods/add/{id}', 'GoodController@add');
Route::get('/goods/cart', 'GoodController@cart');
Route::delete('/goods/destroy/{id}', 'GoodController@destroy');
Route::any('/goods/ord/', 'GoodController@ord');
Route::get('/goods/listorders', 'GoodController@listorders');
