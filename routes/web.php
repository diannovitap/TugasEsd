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
    return view('dashboard');
});
Route::get('/main', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/ruangan', function () {
    return view('ruangan');
});
Route::get('/peminjam', function () {
    return view('peminjam');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/peminjam', 'PeminjamController@index');
Route::get('/ruangan', 'RuanganController@index');
Route::get('/peminjam/tambah','PeminjamController@tambah');
Route::post('/peminjam/store','PeminjamController@store');
Route::get('/peminjam/hapus/{id}','PeminjamController@hapus');
Route::get('/ruangan/hapusRuangan/{id}','RuanganController@hapusRuangan');
Route::get('/ruangan/tambahRuangan','RuanganController@tambahRuangan');
Route::post('/ruangan/store','RuanganController@store');

// Route::get('/', [PeminjamController::class,'login']);
// Route::get('/main', [PeminjamController::class,'main']);
// Route::get('/dashboard', [PeminjamController::class,'dashboard']);
// Route::get('/peminjam', [PeminjamController::class,'index']);
// Route::get('/peminjam/create', [PeminjamController::class,'create']);
// Route::get('/peminjam/store', [PeminjamController::class,'store']);
// Auth::routes();		