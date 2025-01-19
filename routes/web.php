<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeRoomController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StrategicController;
use App\Http\Controllers\FacilitatorController;
use App\Http\Controllers\MarketingController;


// use App\Http\Controllers\MilestoneForecastController;

// Login Page
Route::get('/login', [CodeRoomController::class, 'index'])->name('login');
Route::post('/login', [CodeRoomController::class, 'login'])->name('login.process');

// Add Interest Page
Route::get('/page1', [InterestController::class, 'index'])->name('interest');
Route::post('/page1/add', [InterestController::class, 'store'])->name('interest.add');

// Main Page (Leaderboard, End Round, End Game)
Route::get('/page2', [MainPageController::class, 'index'])->name('main.page');
Route::post('/page2/end-round', [MainPageController::class, 'endRound'])->name('round.end');
Route::post('/page2/end-game', [MainPageController::class, 'endGame'])->name('game.end');

// Homepage
Route::get('/home', function () {
    return view('home_page');
})->name('home');

// Admin Page
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// Player Page

Route::get('/player', [PlayerController::class, 'index'])->name('player.index');
Route::post('/player/{teamId}/credits', [PlayerController::class, 'storeCredits'])->name('player.storeCredits');
Route::post('/player/store', [PlayerController::class, 'store'])->name('player.store');


// Facilitator Strategist Page
Route::get('/facilitator-strategist', [FacilitatorController::class, 'strategist'])->name('facilitator.strategist');
// Facilitator Marketing Page
Route::get('/facilitator-marketing', [FacilitatorController::class, 'marketing'])->name('facilitator.marketing');

Route::get('/strategic', [StrategicController::class, 'index'])->name('strategic.index');
Route::post('/strategic/hire', [StrategicController::class, 'hireEmployee'])->name('strategic.hire');
Route::post('/strategic/train', [StrategicController::class, 'trainEmployee'])->name('strategic.train');

Route::get('/marketing', [MarketingController::class, 'index'])->name('marketing.index');
Route::post('/marketing/{teamId}', [MarketingController::class, 'store'])->name('marketing.store');


// // Milestone & Forecast Page
// Route::get('/milestone', [MilestoneForecastController::class, 'index'])->name('milestone');

// // End Score Page
// Route::get('/end-score', [MainPageController::class, 'endScore'])->name('end.score');
