<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\DetailKosController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\InsertController;
use GuzzleHttp\Middleware;
use Illuminate\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//KOS KU TAMPILAN UNTUK COSTUMER
Route::get('/kosku', [SelectController::class, 'store_costumer']);

//isi kos admin
Route::get('/kos_isi', function () {
    return view('kos_isi');
})->middleware('auth');

//detail kos costumer
Route::get('detail/{id}', [SelectController::class, 'detail_costumer']);

//daftar kos admin
Route::get('/kos_tampil', [DetailKosController::class, 'index'])->middleware('auth');

// registrasi admin
Route::get('/register', [RegistrasiController::class, 'index']);

Route::post('/registrasi_proses', [RegistrasiController::class, 'registrasi']);

// login admin
Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/login_x', [LoginController::class, 'login']);

// log out
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth');

//insert data kos Controller
Route::post('/insert', [InsertController::class, 'store']);

//selectcontroller
Route::get('/datakos', [SelectController::class, 'store'])->middleware('auth');

//edit data kos
Route::get('kos_edit/{id}', [SelectController::class, 'show'])->middleware('auth');

Route::post('kos_edit/{id}', [SelectController::class, 'edit'])->middleware('auth');

//hapus data kos
Route::get('kos_delete/{id}', [SelectController::class, 'ShowDelete'])->middleware('auth');

Route::post('kos_delete/{id}', [SelectController::class, 'Delete'])->middleware('auth');

   

