<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('dosen', [DosenController::class, 'store'])->name('dosen.store');
Route::get('dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('dosen.edit');
Route::put('dosen/{dosen}', [DosenController::class, 'update'])->name('dosen.update');
Route::delete('dosen/{dosen}', [DosenController::class, 'destroy'])->name('dosen.destroy');
Route::get('dosen/{dosen}', [DosenController::class, 'show'])->name('dosen.show');

Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
Route::get('mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::get('mata_kuliah', [MataKuliahController::class, 'index'])->name('mata_kuliah.index');
Route::get('mata_kuliah/create', [MataKuliahController::class, 'create'])->name('mata_kuliah.create');
Route::post('mata_kuliah', [MataKuliahController::class, 'store'])->name('mata_kuliah.store');
Route::get('mata_kuliah/{mataKuliah}', [MataKuliahController::class, 'show'])->name('mata_kuliah.show');
Route::get('mata_kuliah/{mataKuliah}/edit', [MataKuliahController::class, 'edit'])->name('mata_kuliah.edit');
Route::put('mata_kuliah/{mataKuliah}', [MataKuliahController::class, 'update'])->name('mata_kuliah.update');
Route::delete('mata_kuliah/{mataKuliah}', [MataKuliahController::class, 'destroy'])->name('mata_kuliah.destroy');