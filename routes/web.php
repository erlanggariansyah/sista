<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\SeminarController;

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

Auth::routes();

Route::get('/', [SeminarController::class, 'home']);
Route::get('/register/otp/{id}', [OtpController::class, 'read'])->name('otp');
Route::post('/register/otp', [OtpController::class, 'verificate']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/lobby', function () {
    return view ('lobby');
})->name('lobby');

Route::group(['middleware' => 'active'], function () {
    Route::get('/dashboard', [DashboardController::class, 'read'])->name('dashboard');
    Route::get('/mahasiswa', [MahasiswaController::class, 'read']);
    Route::get('/dosen', [DosenController::class, 'read']);
    Route::get('/seminar', [SeminarController::class, 'read']);
    Route::get('/seminar/tambah', [SeminarController::class, 'addSeminar'])->name('seminar');
    Route::post('/seminar/tambah', [SeminarController::class, 'addSeminarInput']);
    Route::get('/seminar/{id}/hapus', [SeminarController::class, 'hapus']);
    Route::get('/seminar/{id}/edit', [SeminarController::class, 'edit']);
    Route::post('/seminar/{id}/edit', [SeminarController::class, 'editPost']);
    Route::get('/seminar/peserta', [SeminarController::class, 'pesertaSeminar']);
    Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambahForm']);
    Route::get('/dosen/tambah', [DosenController::class, 'tambahForm']);
    Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'tambahFormPost']);
    Route::post('/dosen/tambah', [DosenController::class, 'tambahFormPost']);
    Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
    Route::get('/dosen/{id}/edit', [DosenController::class, 'edit']);
    Route::get('/mahasiswa/{id}/delete', [MahasiswaController::class, 'hapus']);
    Route::get('/dosen/{id}/delete', [DosenController::class, 'hapus']);
});
