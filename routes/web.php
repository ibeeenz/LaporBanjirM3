<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LaporBanjirController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

//praktikum
Route::get('/lapor', [LaporBanjirController::class, 'index'])->name('laporbanjir.index');
Route::get('/lapor/tambah', [LaporBanjirController::class, 'create'])->name('laporbanjir.create');
Route::post('/lapor/proses', [LaporBanjirController::class, 'store'])->name('laporbanjir.store');