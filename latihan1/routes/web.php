<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobacontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/coba', [cobacontroller::class, 'index']);

Route::get('/mahasiswa/{id}', function ($id) {
    return "Mahasiswa dengan ID: " .$id;
});