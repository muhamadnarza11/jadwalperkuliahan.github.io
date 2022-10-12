<?php

use App\Http\Controllers\JadwalController;
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
Route::get('/Home', function () {
    return view('layout.master');
});
// Route::get('/Jadwal-index', function () {
//     return view('jadwal.index');
// });
Route::get('/Jadwal-index', [JadwalController::class,'index']);
Route::get('/Jadwal-create', [JadwalController::class,'create']);
Route::post('/Jadwal-store', [JadwalController::class,'store']);
Route::get('/Jadwal-edit/{id}/edit', [JadwalController::class,'edit']);
Route::put('/Jadwal/{id}', [JadwalController::class,'update']);
Route::get('/Jadwal-index/{id}', [JadwalController::class,'destroy']);

