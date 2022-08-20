<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\DashboardController;

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
    return view('form');
});
Route::get('/berhasil', function () {
    return view('berhasil');
});
Route::get('/gagal', function () {
    return view('gagal');
});

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard', DashboardController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('/export', ExportController::class);
Route::resource('/nasabah', NasabahController::class);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
