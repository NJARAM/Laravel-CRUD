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
Route::get('/home/logout', 'Auth\LoginController@userlogout')->name('user.logout');


Route::get('/adminlogin',  'Admin\LoginController@showLoginForm')->name('admlogin');
Route::post('/adminlogin', 'Admin\LoginController@login')->name('admin_login');
Route::get('/logout', ['as' => 'admin_logout', 'uses' => 'Admin\LoginController@logout']);


Route::prefix('admin')->group(function (){

    Route::get('/home', 'AdminController@index')->name('admin.home');

});


Route::get('/home/books',  'BookController@booksForm')->name('book_form');
Route::post('/home/books', 'BookController@bookstore')->name('book_store');

Route::get('/home/getallBooks',  'BookController@index')->name('books.index');
Route::get('/home/getallBooks/{book_id}/edit',  'BookController@edit')->name('books.edit');
Route::post('/home/getallBooks/{book_id}',  'BookController@update')->name('books.update');
Route::post('/home/getallBooks/del/{book_id}',  'BookController@destroy')->name('books.destroy');
