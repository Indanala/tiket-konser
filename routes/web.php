<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
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

Route::get('/pesantiketkonser', [PesanController::class,'index']);
Route::get('/proses-form', [PesanController::class, 'prosesForm']);
Route::get('/login', [PesanController::class,'login']);
Route::post('/login', [PesanController::class,'prosesLogin']);

Route::get('/daftar-tiket', [PesanController::class,'daftarTiket'])->middleware('login');

Route::get('/check-in', [PesanController::class,'checkIn'])->middleware('login');
Route::post('/cekid', [PesanController::class,'cekid']);
Route::get('/laporan', [PesanController::class,'laporan'])->middleware('login');


