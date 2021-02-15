<?php

use App\Http\Controllers\CalculController;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\RepertoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Calcul => welcome
Route::get('/', [CalculController::class, 'index']);


// Répertoire
Route::get('/repertory', [RepertoryController::class, 'index']);


// Journalier
Route::get('/daily', [DailyController::class, 'index']);
