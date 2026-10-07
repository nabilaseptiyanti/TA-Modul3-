<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, nabila';
});


Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

Route::get('/profile', function () {
    return view('profile');
})->name('halaman.profile');

Route::get('/about', function () {
    return view('about', ['name' =>'Nabila']);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman Home';
})->name('home.page');

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses'])->name('halaman.proses');
