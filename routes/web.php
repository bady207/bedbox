<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BoxerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\PertandinganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WasitController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.welcome');
});
Route::get('/', function () {
    return view('front'); // Memanggil file front.blade.php
});


Auth::routes(['register' => false]);

// use Illuminate\Support\Facades\Route;

// Grup route untuk admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    // Route untuk dashboard admin
    Route::get('/', function () {
        return view('admins.index');
    });

    // Resource routes untuk fitur admin
    Route::resource('wasit', WasitController::class)->except('show');
    Route::resource('pelatih', PelatihController::class)->except('show');
    Route::resource('atlet', BoxerController::class)->except('show');
    Route::resource('pertandingan', PertandinganController::class)->except('show');
    Route::resource('berita', BeritaController::class)->except('show');
    Route::resource('user', UserController::class)->except('show');
    Route::get('{any}', function () {
        return response()->view('errors.admin_404', [], 404);
    })->where('any', '.*');
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('trainer', [FrontController::class, 'trainer']);
Route::get('front', [FrontController::class, 'pelatih']);
Route::get('referee', [FrontController::class, 'referee']);
Route::get('/', [FrontController::class, 'atlet']);
Route::get('fight', [FrontController::class, 'fight']);
Route::get('petarung', [FrontController::class, 'boxer']);
Route::get('ingfo', [FrontController::class, 'berita']);
Route::get('detail/{slug}', [FrontController::class, 'beritashow'])->name('detail');
Route::get('det/{slug}', [FrontController::class, 'boxershow'])->name('det');


