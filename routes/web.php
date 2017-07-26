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

Route::get('/login', function () {
    return view('login');
});

//Auth::routes();

Route::resource('Barang', 'BarangController');
Route::resource('Pengadaan', 'PengadaanController');
  Route::get('Pengadaan/{Pengadaan}/TambahBarang', 'DetailTransaksi@tambahBarangPengadaan');
  Route::post('Pengadaan/{Pengadaan}/StoreBarang', 'DetailTransaksi@storeBarangPengadaan');
  Route::get('Pengadaan/{Pengadaan}/EditBarang/{Detail}', 'DetailTransaksi@editBarangPengadaan');
  Route::post('Pengadaan/{Pengadaan}/EditBarang/{Detail}', 'DetailTransaksi@updateBarangPengadaan');
  Route::get('Pengadaan/{Pengadaan}/HapusBarang/{Detail}', 'DetailTransaksi@hapusBarangPengadaan');
Route::resource('Pengeluaran', 'PengeluaranController');
  Route::get('Pengeluaran/{Pengadaan}/TambahBarang', 'DetailTransaksi@tambahBarangPengeluaran');
  Route::post('Pengeluaran/{Pengeluaran}/StoreBarang', 'DetailTransaksi@storeBarangPengeluaran');
  Route::get('Pengeluaran/{Pengeluaran}/EditBarang/{Detail}', 'DetailTransaksi@editBarangPengeluaran');
  Route::post('Pengeluaran/{Pengeluaran}/EditBarang/{Detail}', 'DetailTransaksi@updateBarangPengeluaran');
  Route::get('Pengeluaran/{Pengeluaran}/HapusBarang/{Detail}', 'DetailTransaksi@hapusBarangPengeluaran');
