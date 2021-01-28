<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blank', [App\Http\Controllers\blankController::class, 'index'])->name('blank');
Route::get('/main', [App\Http\Controllers\mainControler::class, 'index'])->name('main');
Route::get('/tables', [App\Http\Controllers\tablesController::class, 'index'])->name('tables');
Route::get('/ajout', [App\Http\Controllers\gameController::class, 'index'])->name('ajout');
Route::get('/member', [App\Http\Controllers\memberController::class, 'index'])->name('member');
Route::get('/myTestMail', [App\Http\Controllers\PDFController::class, 'index'])->name('myTestMail');
