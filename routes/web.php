<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ContestantController;
use App\Http\Controllers\ExposureController;
use App\Http\Controllers\JudgeController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\ResultController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::resource('contests', ContestController::class);
Route::resource('contestants', ContestantController::class);
Route::resource('exposures', ExposureController::class);
Route::resource('judges', JudgeController::class);
Route::get('/scores/export', [ScoreController::class, 'export'])
    ->name('scores.export');

Route::resource('scores', ScoreController::class);

Route::resource('criteria', CriteriaController::class);
Route::get('/results', [ResultController::class, 'index'])
    ->name('results.index');   
});

require __DIR__.'/auth.php';
