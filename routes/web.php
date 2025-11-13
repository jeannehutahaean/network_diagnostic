<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\FinderController;

// Redirect root ke dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Menu utama
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/diagnostic', [NetworkController::class, 'index'])->name('diagnostic');
Route::post('/diagnostic/run', [NetworkController::class, 'runDiagnostic'])->name('diagnostic.run');
Route::get('/ip-finder', [FinderController::class, 'index'])->name('ipfinder');
Route::post('/ip-finder/scan', [FinderController::class, 'scan'])->name('ipfinder.scan');
Route::get('/logs', [DashboardController::class, 'logs'])->name('logs');
