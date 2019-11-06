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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

/*
Route::get('/admin/users', 'UsersController@index');
Route::get('/admin/adduser', 'UsersController@adduser');
*/

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function(){
    Route::get('/', function () {
    return view('Admin.Dashboard.index');
});
    Route::get('/users', 'UsersController@index')->name('admin.users.list');
    Route::get('/adduser', 'UsersController@adduser')->name('admin.users.add');
    Route::post('/adduser', 'UsersController@store')->name('admin.users.store');
    Route::get('/products', 'ProductController@list')->name('admin.product.list');
    Route::get('/addproduct', 'ProductController@add')->name('admin.product.add');
    Route::get('/updateproduct', 'ProductController@update')->name('admin.product.update');
    Route::get('/search', 'UsersController@adminSearch')->name('admin.search');
});
/*
Route::get('/users/search', 'UsersController@userSearch')->name('users.search');
