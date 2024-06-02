<?php

use App\Http\Controllers\UserPanel\UserController;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\AdminPanel\MerekController;
use App\Http\Controllers\AdminPanel\PatenController;
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
    return view('auth.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->role === 'user') {
            return redirect()->route('user.dashboard');
        }
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('role:admin')->group(function () {
        Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('admin/paten/pengajuan-awal', [PatenController::class, 'pengajuanawal'])->name('paten.pengajuan-awal');
        Route::get('admin/paten/terdaftar', [PatenController::class, 'terdaftar'])->name('paten.terdaftar');
        Route::get('admin/paten/kelengkapan-dokumen', [PatenController::class, 'kelengkapandokumen'])->name('paten.kelengkapan-dokumen');
        Route::get('admin/paten/mediasi', [PatenController::class, 'mediasi'])->name('paten.mediasi');
        Route::get('admin/paten/granted', [PatenController::class, 'granted'])->name('paten.granted');

        Route::get('admin/merek', [MerekController::class, 'merek'])->name('merek');
    });

    Route::middleware('role:user')->group(function () {
        Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    });
});

require __DIR__.'/auth.php';
