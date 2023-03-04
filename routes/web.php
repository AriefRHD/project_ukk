<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthSiswaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LoginMasyarakatController;
use App\Http\Middleware\Auth_login;
use App\Http\Middleware\Auth_siswa;

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
    return view('templatenya.main');
});


Route::group(['middleware' => ['guest']], function(){ 
    Route::get('/login/admin', [AuthController::class, 'index'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    
    Route::get('/login/siswa', [AuthSiswaController::class, 'index'])->name('login-siswa');
    Route::post('/authenticate-siswa', [AuthSiswaController::class, 'authenticate'])->name('authenticate-siswa');
});


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/logout-siswa', [AuthSiswaController::class, 'logout'])->name('logout-siswa');


Route::group(['middleware'=>'siswa'], function() {
    Route::get('dashboard-siswa', [AuthSiswaController::class, 'siswa'])->name('dashboard-siswa');
});

Route::group(['middleware' => ['auth','auth_login:admin']], function(){
    Route::get('admin', [AuthController::class, 'admin'])->name('admin');
    // DATA PETUGAS
    Route::resource('/petugas', PetugasController::class);
    // DATA SPP
    Route::resource('/spp', SppController::class);
    // DATA KELAS
    Route::resource('/kelas', KelasController::class);
    // DATA SISWA
    Route::resource('/siswa', SiswaController::class);
});

Route::group(['middleware' => ['auth','auth_login:petugas']], function(){
    Route::get('akses-petugas', [AksesPetugasController::class, 'index'])->name('akses-petugas');
    // DATA PEMBAYARAN
    Route::resource('/pembayaran', PembayaranController::class);
});