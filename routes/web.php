<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NilaiController;

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


Route::get('/', [AuthController::class, 'getLogin'])->name('login');
Route::post('/', [AuthController::class, 'postLogin']);
Route::get('/regiz', [AuthController::class, 'getRegistration'])->name('regiz');
Route::post('/regiz', [AuthController::class, 'postRegistration']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/peta-top-100', function () {
    return view('peta');
})->name('peta');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DetailController::class, 'index'])->name('dashboard');
    Route::get('/detil/{id}', [DetailController::class, 'show'])->name('detil');
    Route::post('/dashboard', [DetailController::class, 'store'])->name('nilai');
    Route::get('/penilaian', [NilaiController::class, 'index'])->name('data-nilai');
    Route::get('/proposal/{id}', [NilaiController::class, 'proposal'])->name('proposal');
    Route::put('/proposal/{id}', [DetailController::class, 'update'])->name('acc');
    Route::get('/proposal', [DetailController::class, 'proposal'])->name('data-proposal');
    Route::post('/biaya', [DetailController::class, 'biaya'])->name('biaya');
});
