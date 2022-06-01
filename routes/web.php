<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerMotor;
use App\Http\Controllers\controllerSewa;

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
require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [controllerMotor::class, 'index'])->name('dashboard');
    Route::get('/', [controllerMotor::class, 'index']);
    Route::get('/index', [controllerMotor::class, 'index']);
    Route::post('/index', [controllerMotor::class, 'index'])->name('sort.motor');
    Route::post('formSewa.php', [controllerSewa::class, 'form'])->name('sewa.motor');
    Route::post('/invoice',[controllerSewa::class, 'invoice'])->name('form.penyewaan');
    Route::get('/index',[controllerMotor::class, 'index'])->name('home.button');

});

Route::middleware(['auth', 'role:admin'])->group(function () {
    
    Route::get('/indexAdmin', [controllerMotor::class, 'indexAdmin'])->name('index.admin');
    Route::post('/editMotor', [controllerSewa::class, 'editMotor'])->name('edit.motor');
    Route::post('/simpanEditMotor', [controllerSewa::class, 'simpanEditMotor'])->name('simpan.edit.motor');
    Route::get('/addMotor', [controllerSewa::class, 'addMotor'])->name('add.motor');
    Route::post('/simpanAddMotor', [controllerSewa::class, 'simpanAddMotor'])->name('simpan.add.motor');
    Route::post('/editTransaksi', [controllerSewa::class, 'editTransaksi'])->name('edit.transaksi');
    Route::post('/deleteTransaksi', [controllerSewa::class, 'deleteTransaksi'])->name('delete.transaksi');
    Route::post('/simpanEditTransaksi', [controllerSewa::class, 'simpanEditTransaksi'])->name('simpan.edit.transaksi');
    Route::post('/deleteMotor', [controllerSewa::class, 'deleteMotor'])->name('delete.motor');

});