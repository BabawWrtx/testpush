<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswas', [MahasiswaController::class, 'index'])
    ->name('mahasiswas.index');  //menampilkan semua isi table mahasiswas

Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])
    ->name('mahasiswas.create');  //menampilkan form input table mahasiswas

Route::post('/mahasiswas', [MahasiswaController::class, 'store'])
    ->name('mahasiswas.store'); //memproses hasil form

Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])
    ->name('mahasiswas.show');

Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])
    ->name('mahasiswas.edit');

Route::patch('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])
    ->name('mahasiswas.update');    //sedikit butuh pengaturan, karna http hanya mendukung get dan post saja

Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])
    ->name('mahasiswas.destroy');
