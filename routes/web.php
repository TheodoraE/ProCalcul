<?php

use App\Http\Controllers\AlimentController;
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

// Welcome
Route::resource('/', CalculController::class);
Route::get('/aliments/getResources',  [AlimentController::class, 'getResources']);




// Répertoire / Repertory
Route::resource('/repertory', RepertoryController::class);

// Journalier / Daily
Route::resource('/daily', DailyController::class);
// Route::post('/destroy-all', [DailyController::class, 'destroyALL']);


// // Journalier
// Route::get('/daily', [DailyController::class, 'index']);
// Route::get('/edit-max/{id}', [DailyController::class, 'edit']);
// Route::post('/update-max/{id}', [DailyController::class, 'update']);
// Route::post('/destroy-one/{id}', [DailyController::class, 'destroy']);