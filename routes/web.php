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
Route::get('posts','postcontroller@index');
Route::get('post/create','postController@create');
Route::post('post/store','postcontroller@store');
Route::get('post/edit/{id}','postcontroller@edit');
Route::put('post/update/{id}','postcontroller@update');
Route::delete('post/update/{id}','postcontroller@destory');



