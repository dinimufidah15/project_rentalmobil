<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('welcome');
});
// tambahkan routing baru
Route::get('/salam',function(){
    return "assalammualaikum sttnf, selamat belajar laravel 11";
});
//routing profile
route::get('/profil',function(){
    return view('profil');
});
route::get('/admin',[AdminController::class, 'index']);
route::get('home', [HomeController::class, 'index'])->name('home');
//jenis_kendaraan
Route::get('/admin/jenis_kendaraan',[JenisController::class, 'index']);       
Route::get('/admin/form_jenis/create', [JenisController::class, 'create']);  
Route::post('/admin/jenis_kendaraan/store', [JenisController::class, 'store']);  
Route::delete('/admin/jenis_kendaraan/destroy/{id}', [JenisController::class, 'destroy']);  
//armada
Route::get('/admin/armada',[ArmadaController::class, 'index']);       
Route::get('/admin/form_armada/create', [ArmadaController::class, 'create']);  
Route::post('/admin/armada/store', [ArmadaController::class, 'store']);  
Route::delete('/admin/armada/destroy/{id}', [ArmadaController::class, 'destroy']);  
//pembayaran
Route::get('/admin/pembayaran',[PembayaranController::class, 'index']);       
Route::get('/admin/form_pembayaran/create', [PembayaranController::class, 'create']);  
Route::post('/admin/pembayaran/store', [PembayaranController::class, 'store']);  
Route::delete('/admin/pembayaran/destroy/{id}', [PembayaranController::class, 'destroy']);
//peminjaman
Route::get('/admin/peminjaman',[PeminjamanController::class, 'index']);       
Route::get('/admin/form_peminjaman/create', [PeminjamanController::class, 'create']);  
Route::post('/admin/peminjaman/store', [PeminjamanController::class, 'store']);  
Route::delete('/admin/peminjaman/destroy/{id}', [PeminjamanController::class, 'destroy']);