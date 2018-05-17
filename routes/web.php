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

use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', 'NewsController@index');
Route::resource('news', 'NewsController')->middleware('auth');
Route::resource('comments', 'CommentsController');
Route::resource('img', 'ImgController');
Route::resource('category', 'CategoryController');
Route::resource('user', 'UserController');
Route::get('show/{id}','ShowController@show');
Route::post('show/{id}','ShowController@insert');
Route::get('image-view','ImageController@index');
Route::post('image-view/{id}','ImageController@store');
Route::get ( '/vueitems', 'MainController@readItems' );
Route::post ( '/vueitems', 'MainController@storeItem' );