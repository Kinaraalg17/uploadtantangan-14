<?php
 
Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog','BlogController@halamanutama');
Route::get('/login','BlogController@login');
Route::post('/admin2','BlogController@admin2');
Route::get('/blog','BlogController@halamanutama');
Route::get('/operator','BlogController@halamanoperator');
Route::get('logout','BlogController@logout');
Route::get('/customer','BlogController@halamanpelanggan');

Route::get('/admin1','adminController@show');
Route::get('/admin1/tambah','adminController@tambah');
Route::post('/admin1/store','adminController@store');
Route::get('/admin1/edit/{ID}','adminController@edit');
Route::post('/admin1/update','adminController@update');
Route::get('/admin1/hapus/{id}','adminController@hapus');
Route::get('/admin1/cari','adminController@cari');


Route::get('/datatamu','tamuController@show');
Route::get('/datatamu/tambah','tamuController@tambah');
Route::post('/datatamu/store','tamuController@store');
Route::get('/datatamu/edittamu/{ID}','tamuController@edit');
Route::post('/datatamu/update','tamuController@update');
Route::get('/datatamu/hapus/{id}','tamuController@hapus');
Route::get('/datatamu/cari','tamuController@cari');


Route::get('/kamar','kamarController@show');
Route::get('/kamar/tambah','kamarController@tambah');
Route::post('/kamar/store','kamarController@store');
Route::get('/kamar/editkamar/{ID}','kamarController@edit');
Route::post('/kamar/update','kamarController@update');
Route::get('/kamar/hapus/{id}','kamarController@hapus');

Route::get('/reservasi','reservasiController@tambah3');
Route::get('/reservasi/tambah','reservasiController@tambah');
Route::post('/reservasi/store','reservasiController@store');
Route::get('/reservasi/edit/{ID}','reservasiController@edit');
Route::post('/reservasi/update','reservasiController@update');
Route::get('/reservasi/hapus/{id}','reservasiController@hapus');
Route::get('/reservasi/cari','reservasiController@cari');

Route::get('/pembayaran','pembayaranController@tambah3');
Route::get('/pembayaran/tambah','pembayaranController@tambah');
Route::post('/pembayaran/store','pembayaranController@store');
Route::get('/pembayaran/edit/{ID}','pembayaranController@edit');
Route::post('/pembayaran/update','pembayaranController@update');
Route::get('/pembayaran/hapus/{id}','pembayaranController@hapus');

Route::get('/kredit','kreditController@tambah3');
Route::get('/kredit/tambah','kreditController@tambah');
Route::post('/kredit/store','kreditController@store');
Route::get('/kredit/edit/{ID}','kreditController@edit');
Route::post('/kredit/update','kreditController@update');
Route::get('/kredit/hapus/{id}','kreditController@hapus');

Route::get('/metode','BlogController@halamanmetode');

Route::get('/tunai','tunaiController@tambah3');
Route::get('/tunai/tambah','tunaiController@tambah');
Route::post('/tunai/store','tunaiController@store');
Route::get('/tunai/edit/{ID}','tunaiController@edit');
Route::post('/tunai/update','tunaiController@update');
Route::get('/tunai/hapus/{id}','tunaiController@hapus');

Route::get('/detailreservasi','detailreservasiController@tambah3');
Route::get('/detailreservasi/tambah','detailreservasiController@tambah');
Route::post('/detailreservasi/store','detailreservasiController@store');


