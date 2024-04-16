<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganController;
use App\Models\Keuangan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|a
*/

Route::get('/', [KeuanganController::class, 'count'])->name('count');


Route::get('/uang',[KeuanganController::class, 'index'])->name('uang');
Route::get('/about', [KeuanganController::class, 'about'])->name('about');

Route::get('/tambahdata', [KeuanganController::class, 'tambahdata'])->name('tambadata');
Route::post('/insertdata', [KeuanganController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}', [KeuanganController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [KeuanganController::class, 'updatedata'])->name('updatedata');


Route::get('/delete/{id}', [KeuanganController::class, 'delete'])->name('delete');


Route::get('/aksi', [KeuanganController::class, 'aksi'])->name('aksi');









