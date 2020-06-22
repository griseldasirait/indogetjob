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

//Rute authentifikasi (Login, Daftar, Logout)
Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/profilPerusahaan', function(){
    return view('profilPerusahaan');
})->middleware('auth')->name('profilPerusahaan.index');
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/', function () {
    return view('welcome');
});

// Route Profil Perusahaan
// Dependent-Dropdown
Route::get('profilPerusahaan', 'ProfilPerusahaanController@index')->name('profilPerusahaan.index');
Route::post('profilPerusahaan', 'ProfilPerusahaanController@store')->name('profilPerusahaan.store');
Route::post('profilPerusahaan/simpan', 'ProfilPerusahaanController@prosesSimpan');

// Route Kriteria Perusahaan
Route::get('pilihKriteria', 'KriteriaPerusahaanController@index');
Route::post('pilihKriteria/simpan', 'KriteriaPerusahaanController@prosesSimpan');

// Route Sub-Kriteria Perusahaan
Route::get('pilihSubKriteria', 'SubKriteriaPerusahaanController@index');
Route::post('pilihSubKriteria/simpan', 'SubKriteriaPerusahaanController@prosesSimpan');

// Route Hasil Rekomendasi
Route::get('hasilRekomendasi', 'RekomendasiController@index');