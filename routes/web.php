<?php

use App\Http\Controllers\MembreController;

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

Route::get('/', [MembreController::class, 'home'])->name('home');
Route::get('/show/{id}', [MembreController::class, 'show'])->name('show.membre');
Route::get('/delete/{id}', [MembreController::class, 'delete'])->name('delete.membre');
Route::post('/store/membre/', [MembreController::class, 'store'])->name('store.membre');
Route::get('/create', [MembreController::class, 'create'])->name('create');
Route::get('/edit/{id}', [MembreController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [MembreController::class, 'update'])->name('update.membre');