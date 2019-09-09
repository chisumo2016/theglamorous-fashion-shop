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



Route::view('/', 'site.pages.homepage');
Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');

require 'admin.php';
Auth::routes();


//Route::get('/', function () {
//    return view('welcome');
//});
//Route::view('/admin', 'admin.dashboard.index');
//Route::view('/admin/login', 'admin.auth.login');
//Route::group(['prefix' => 'admin'], function () {
//    Route::get('/', function () {
//        return 'admin home';
//    });
//});