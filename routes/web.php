<?php

use App\Http\Controllers\AlimentController;
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


// Nouveaux
Route::resource('/', CalculController::class);
Route::get('/aliments/getResources',  [AlimentController::class, 'getResources']);


Route::resource('/daily', DailyController::class);

// Calcul => welcome
// Route::get('/', [CalculController::class, 'index']);
// Route::post('/add-daily', [CalculController::class, 'store']);

// // Répertoire
// Route::get('/repertory', [RepertoryController::class, 'index']);


// // Journalier
// Route::get('/daily', [DailyController::class, 'index']);
// Route::get('/edit-max/{id}', [DailyController::class, 'edit']);
// Route::post('/update-max/{id}', [DailyController::class, 'update']);
// Route::post('/destroy-one/{id}', [DailyController::class, 'destroy']);
// Route::post('/destroy-all', [DailyController::class, 'destroyALL']);