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
    return view('auth/login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/cpl', 'content.cpl')->name('cpl');
    Route::view('/cpmk', 'content.cpmk')->name('cpmk');
    Route::view('/matakuliah', 'content.matakuliah')->name('matakuliah');
    Route::view('/mahasiswa', 'content.mahasiswa')->name('mahasiswa');
    Route::view('/dosen', 'content.dosen')->name('dosen');
    Route::view('/nilai', 'content.nilai')->name('nilai');
    Route::view('/rekap', 'content.rekap')->name('rekap');
    Route::view('/rapor', 'content.rapor')->name('rapor');
    Route::view('/bukupanduan', 'content.bukupanduan')->name('bukupanduan');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
