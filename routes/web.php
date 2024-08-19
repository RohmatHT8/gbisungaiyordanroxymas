<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Beranda']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Kami']);
});

Route::get('/service', function () {
    return view('service', ['title' => 'Layanan']);
});

Route::get('/comunity', function () {
    return view('comunity', ['title' => 'Komunitas']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Hubungi Kami']);
});
