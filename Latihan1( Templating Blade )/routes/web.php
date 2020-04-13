<?php

use App\Http\Controllers\DosenController;
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

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    return view('products/blog');
});

Route::get('/dosen{{nama}}', 'DosenController@index');

Route::get('tambah', 'DosenController@tambah');


Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
