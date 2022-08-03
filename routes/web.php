<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\dataProdController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::resource('data-prod', dataProdController::class);
Route::get('data-prod/create_data/{tgl}', [dataProdController::class, 'create_data'])->name('create_data.index');
Route::get('data-prod/{id}/{tgl}/{other}', [dataProdController::class, 'edit_data'])->name('edit_data_other.index');
Route::get('data-prod-report', [dataProdController::class, 'report'])->name('data-prod.report');
Route::post('detail-pit', [dataProdController::class, 'getPit'])->name('data-prod.getPit');
Route::get('dashboard/detail/{site}', [DashboardController::class, 'show'])->name('dashboard.show');

require __DIR__.'/auth.php';
