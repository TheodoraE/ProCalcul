<?php

use App\Http\Controllers\AlimentController;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\DailyuserController;
use App\Http\Controllers\RepertoryController;
use App\Http\Controllers\TypeController;
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

////// 1st page
// Welcome
    // API Aliments
Route::get('/aliments/getResources',  [AlimentController::class, 'getResources']);
///////
Route::resource('/', CalculController::class);
Route::post('/dailyUser/handle', [DailyuserController::class, 'store']);

////// 2nd page
// Répertoire / Repertory
    // API Aliments du type
Route::get('/aliments/getAliment/{type?}',  [AlimentController::class, 'getAliment']);
    // API Type
Route::get('types/getType/', [TypeController::class, 'getType']);
///////
Route::resource('/repertory', RepertoryController::class);


////// 3rd page
// Journalier / Daily
// Route::post('/destroy-all', [DailyController::class, 'destroyALL']);
Route::post('/store-daily', [DailyController::class, 'storeDaily']);
Route::resource('/daily', DailyController::class);


// // Journalier
// Route::get('/daily', [DailyController::class, 'index']);
// Route::get('/edit-max/{id}', [DailyController::class, 'edit']);
// Route::post('/update-max/{id}', [DailyController::class, 'update']);
// Route::post('/destroy-one/{id}', [DailyController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
