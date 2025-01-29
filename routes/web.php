<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeRoomController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameInputController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\StrategicController;
use App\Http\Controllers\UpgradeController;
use App\Http\Controllers\StrategicHireTrainController;
use App\Http\Controllers\LeaderboardController;

// Redirect default URL ke halaman home
Route::get('/', function() {
    return redirect()->route('home');
});

// Login Page (Code Room)
Route::controller(CodeRoomController::class)->group(function () {
    Route::get('/coderoom', 'index')->name('login');
    Route::post('/login', 'login')->name('login.process');
});

// Home Page
Route::get('/home', function () {
    return view('homepage'); // Sesuaikan nama view jika perlu
})->name('home');

// Interest Page (Menambahkan Bunga Kredit)
Route::controller(InterestController::class)->group(function () {
    Route::get('/page1', 'index')->name('interest');
    Route::post('/page1/add', 'store')->name('interest.add');
});

// Game Input (Input Data dalam Game)
Route::prefix('game')->name('game.')->group(function () {
    Route::get('/input', [GameInputController::class, 'create'])->name('input');
    Route::post('/store', [GameInputController::class, 'store'])->name('store');
    Route::get('/success', [GameInputController::class, 'success'])->name('success');
});

// Player Page (Pemilihan Tim)
Route::prefix('player')->name('player.')->group(function () {
    Route::get('/create', [PlayerController::class, 'create'])->name('create');
    Route::post('/store', [PlayerController::class, 'store'])->name('store');
    Route::get('/success', [PlayerController::class, 'success'])->name('success');
});

Route::get('/marketing/input', [MarketingController::class, 'create'])->name('marketing.input');
Route::post('/marketing/store', [MarketingController::class, 'store'])->name('marketing.store');
Route::get('/marketing/success', [MarketingController::class, 'success'])->name('marketing.success');

Route::get('/upgrade/input', [UpgradeController::class, 'create'])->name('upgrade.input');
Route::post('/upgrade/store', [UpgradeController::class, 'store'])->name('upgrade.store');
Route::get('/upgrade/success', [UpgradeController::class, 'success'])->name('upgrade.success');

Route::get('/strategic/input', [StrategicController::class, 'create'])->name('strategic.input');
Route::post('/strategic/store', [StrategicController::class, 'store'])->name('strategic.store');
Route::get('/strategic/success', [StrategicController::class, 'success'])->name('strategic.success');

Route::get('/strategic/hire-train', [StrategicHireTrainController::class, 'create'])->name('strategic.hire_train.input');
Route::post('/strategic/hire-train/store', [StrategicHireTrainController::class, 'store'])->name('strategic.hire_train.store');
Route::get('/strategic/hire-train/success', [StrategicHireTrainController::class, 'success'])->name('strategic.hire_train.success');

Route::get('/admin/leaderboard', [LeaderboardController::class, 'index'])->name('admin.leaderboard');
Route::post('/admin/end-round', [LeaderboardController::class, 'endRound'])->name('admin.endRound');
Route::post('/admin/end-game', [LeaderboardController::class, 'endGame'])->name('admin.endGame');

// Waiting Page
Route::get('/waiting', function () {
    return view('waiting');
})->name('waiting');
