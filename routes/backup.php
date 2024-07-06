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
Route::get('/admin/jenis_kendaraan/edit/{id}', [JenisController::class, 'edit']);
Route::put('/admin/jenis_kendaraan/update/{id}', [JenisController::class, 'update']);
Route::get('/admin/jenis_kendaraan/show/{id}', [JenisController::class, 'show']);
//armada
Route::get('/admin/armada', [ArmadaController::class, 'index']);
    Route::get('/admin/armada/create', [ArmadaController::class, 'create']);
    Route::post('/admin/armada/store', [ArmadaController::class, 'store']);
    Route::get('/admin/armada/edit/{id}', [ArmadaController::class, 'edit']);
    Route::put('admin/armada/store', [ArmadaController::class, 'store']);
    Route::put('/admin/armada/update/{id}', [ArmadaController::class, 'update']);
    Route::delete('/admin/armada/destroy/{id}', [ArmadaController::class, 'destroy']);
    Route::get('/admin/armada/show/{id}', [ArmadaController::class, 'show']);
//pembayaran
Route::get('/admin/pembayaran', [PembayaranController::class, 'index']);
    Route::get('/admin/pembayaran/create', [PembayaranController::class, 'create']);
    Route::post('/admin/pembayaran/store', [PembayaranController::class, 'store']);
    Route::get('/admin/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
    Route::put('admin/pembayaran/store', [PembayaranController::class, 'store']);
    Route::put('/admin/pembayaran/update/{id}', [PembayaranController::class, 'update']);
    Route::delete('/admin/pembayaran/destroy/{id}', [PembayaranController::class, 'destroy']);
    Route::get('/admin/pembayaran/show/{id}', [PembayaranController::class, 'show']);
//peminjaman
Route::get('/admin/peminjaman', [PeminjamanController::class, 'index']);
    Route::get('/admin/peminjaman/create', [PeminjamanController::class, 'create']);
    Route::post('/admin/peminjaman/store', [PeminjamanController::class, 'store']);
    Route::get('/admin/peminjaman/edit/{id}', [PeminjamanController::class, 'edit']);
    Route::put('admin/peminjaman/store', [PeminjamanController::class, 'store']);
    Route::put('/admin/peminjaman/update/{id}', [PeminjamanController::class, 'update']);
    Route::delete('/admin/peminjaman/destroy/{id}', [PeminjamanController::class, 'destroy']);
    Route::get('/admin/peminjaman/show/{id}', [PeminjamanController::class, 'show']);