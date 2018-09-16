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










//-------------------------------------------------------------------
//	Admin Routes													|
//-------------------------------------------------------------------

Route::group(['prefix' => 'admin'], function () {


Route::get('add-user', 'AdminController@add_user')->name('admin.add.user');
Route::get('view-user', 'AdminController@view_user')->name('admin.view.user');
Route::post('store-user', 'AdminController@store_user')->name('admin.store.user');
Route::get('edit-user/{id}', 'AdminController@edit_user')->name('admin.edit.user');
Route::put('update-user/{id}', 'AdminController@update_user')->name('admin.update.user');
Route::get('{user}/delete-user', 'AdminController@delete_user')->name('admin.delete.user');

});
