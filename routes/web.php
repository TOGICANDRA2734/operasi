<?php

use App\Http\Controllers\dataProdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;

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

Route::get('/', [dataProdController::class, 'index']);

Route::resource('data-prod', dataProdController::class);
// Route::get('chart-js', [ChartJSController::class, 'index']);