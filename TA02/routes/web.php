<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', function () {
    return redirect()->route('lapor.form');
});

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])
    ->name('lapor.form');

Route::post('/lapor-banjir/proses', [LaporBanjirController::class, 'proses'])
    ->name('lapor.proses');