<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontController@index')->name('front');
Route::get('/search', 'FrontController@search');
Route::get('admin/register', 'Admin\AdminController@showRegisterForm');
Route::get('admin/login', 'Admin\AdminController@showLoginForm');
Route::post('admin/login/submit', 'Admin\AdminController@login');
Route::post('admin/register/submit', 'Admin\AdminController@register');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('transaksi', 'TransaksiController');
    Route::get('/home', 'FrontController@index')->name('home');
});

Route::group(
    ['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth:admin']],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('kategori', 'KategoriController');
        Route::resource('tiket', 'TiketController');
    }
);
