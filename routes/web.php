<?php

use App\Http\Controllers\dataProdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PmaDailyTcController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('data-prod', dataProdController::class);
Route::post('detail-pit', [dataProdController::class, 'getPit'])->name('data-prod.getPit');
// Route::get('chart-js', [ChartJSController::class, 'index']);