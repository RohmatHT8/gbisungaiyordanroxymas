<?php

use App\Http\Controllers\ProfileController;
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
    return view('beranda', ['title' => 'Beranda']);
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami', ['title' => 'Tentang Kami']);
});
Route::get('/komunitas', function () {
    return view('komunitas', ['title' => 'Komunitas']);
});
Route::get('/layanan', function () {
    return view('layanan', ['title' => 'Layanan']);
});
Route::get('/hubungi-kami', function () {
    return view('hubungi-kami', ['title' => 'Hubungi Kami']);
});
Route::get('/persembahan', function () {
    return view('persembahan', ['title' => 'Persambahan']);
});
Route::get('/renungan', function () {
    return view('renungan', ['title' => 'Renungan Harian']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
