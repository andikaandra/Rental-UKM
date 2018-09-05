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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inventaris', 'AdminController@inventaris')->name('inventaris');
Route::get('/log', 'AdminController@bukuBesar')->name('bukuBesar');
Route::post('/log/masuk', 'AdminController@pemasukan')->name('log.pemasukan');
Route::post('/log/keluar', 'AdminController@pengeluaran')->name('log.pengeluaran');
Route::post('/add/barang', 'AdminController@addProduct')->name('add.new.product');
Route::delete('/delete/barang', 'AdminController@deleteProduct')->name('delete.product');
Route::get('/find/barang', 'AdminController@findProduct')->name('find.product');
Route::put('/update/barang', 'AdminController@updateProduct')->name('update.product');
Route::get('/login', function(){
  return view('login');
});
Route::get('/transaksi', 'AdminController@transaksi')->name('transaksi');
Route::post('/transaction', 'AdminController@newTransaction')->name('new.transaction');
