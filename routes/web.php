<?php

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', [App\Http\Controllers\controllerMotor::class, 'index'])->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::get('/', [App\Http\Controllers\controllerMotor::class, 'index'])->middleware(['auth']);

Route::get('/index', [App\Http\Controllers\controllerMotor::class, 'index'])->middleware(['auth']);

Route::post('/index', [App\Http\Controllers\controllerMotor::class, 'index'])->middleware(['auth'])->name('sort.motor');

Route::post('formSewa.php', [App\Http\Controllers\controllerSewa::class, 'form'])->name('sewa.motor');

Route::post('events/validate',[App\Http\Controllers\EventsController::class, 'validateForm'])->name('validate.event');

Route::post('/invoice',[App\Http\Controllers\controllerSewa::class, 'invoice'])->name('form.penyewaan');

Route::get('/index',[App\Http\Controllers\controllerMotor::class, 'index'])->middleware(['auth'])->name('home.button');

Route::get('/indexAdmin', [App\Http\Controllers\controllerMotor::class, 'indexAdmin'])->middleware(['auth']);

Route::post('/editMotor', [App\Http\Controllers\controllerSewa::class, 'editMotor'])->middleware(['auth'])->name('edit.motor');

Route::post('/simpanEditMotor', [App\Http\Controllers\controllerSewa::class, 'simpanEditMotor'])->middleware(['auth'])->name('simpan.edit.motor');

Route::get('/addMotor', [App\Http\Controllers\controllerSewa::class, 'addMotor'])->middleware(['auth'])->name('add.motor');

Route::post('/simpanAddMotor', [App\Http\Controllers\controllerSewa::class, 'simpanAddMotor'])->middleware(['auth'])->name('simpan.add.motor');

Route::post('/editTransaksi', [App\Http\Controllers\controllerSewa::class, 'editTransaksi'])->middleware(['auth'])->name('edit.transaksi');

Route::post('/simpanEditTransaksi', [App\Http\Controllers\controllerSewa::class, 'simpanEditTransaksi'])->middleware(['auth'])->name('simpan.edit.transaksi');