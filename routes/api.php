<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;

/**
 * API Routes
 */
Route::get('/recommendations', [RecommendationController::class, 'index']);
