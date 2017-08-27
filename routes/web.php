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

Route::get('/', 'UserController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/post', 'PostController@index');

Route::get('/admin/category', 'CategoryController@index');

Route::get('/admin/category/create', 'CategoryController@create');

Route::post('/admin/category/create', 'CategoryController@store');

Route::get('/admin/post/create', 'PostController@create');

Route::post('/admin/post/create', 'PostController@store');

