<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routing get admin
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('admin/guru', [GuruController::class, 'index'])->name('admin.guru');
Route::get('admin/siswa', [SiswaController::class, 'index'])->name('admin.siswa');
Route::get('admin/informasi', [InformasiController::class, 'index'])->name('admin.informasi');
Route::get('admin/jurusan', [JurusanController::class, 'index'])->name('admin.jurusan');

// routing create tampil
Route::get('admin/tambah/tambah-jurusan', [JurusanController::class, 'create'])->name('admin/tambah/tambah-jurusan');

// routing create store post
Route::post('admin/tambah/store', [JurusanController::class, 'store'])->name('admin/tambah/store');

// routing destroy
Route::get('admin/jurusan{id}', [JurusanController::class, 'destroy'])->name('admin/jurusan{id}');
