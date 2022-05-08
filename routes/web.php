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

Route::get('/', [App\Http\Controllers\controllerMotor::class, 'index']);

Route::get('/index', [App\Http\Controllers\controllerMotor::class, 'index']);

Route::post('formSewa.php', [App\Http\Controllers\controllerSewa::class, 'form'])->name('sewa.motor');

Route::post('events/validate',[App\Http\Controllers\EventsController::class, 'validateForm'])->name('validate.event');

Route::post('/invoice',[App\Http\Controllers\controllerSewa::class, 'invoice'])->name('form.penyewaan');

Route::get('/index',[App\Http\Controllers\controllerMotor::class, 'index'])->name('home.button');