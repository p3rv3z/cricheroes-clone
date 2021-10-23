<?php

use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// user, over params could be replace by slug
Route::get('statistics/{user}/batting', [StatisticsController::class, 'batting']);
Route::get('statistics/{user}/bowling', [StatisticsController::class, 'bowling']);
Route::get('statistics/all-overs', [StatisticsController::class, 'allOvers']);
Route::get('statistics/{over}/single-over', [StatisticsController::class, 'singleOver']);
