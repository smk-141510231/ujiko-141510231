<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/superAdmin', function () {
    return view('superAdmin');
});

Route::get('/Admin', function () {
    return view('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('jab', 'jabatancontroller@edit');
Route::resource('jabatan','jabatancontroller');
Route::resource('golongan','golongancontroller');
Route::resource('pegawai','pegawaicontroller');
Route::resource('kategori_lembur','kategorilemburcontroller');
Route::resource('lembur_pegawai','lemburpegawaicontroller');
Route::resource('tunjangan','tunjangancontroller');
Route::resource('tunjangan_pegawai','tunjanganpegawaicontroller');
Route::resource('penggajian','penggajiancontroller');
