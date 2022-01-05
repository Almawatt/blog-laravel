<?php

use App\Http\Controllers\Website\EventController;
use App\Http\Controllers\Website\UserController;
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

Route::get('/', [EventController::class, 'index'])->name('welcome.index');
Route::post('addmateria',[EventController::class, 'store'])->name('addmateria.store');
Route::get('/materia/{slug}', [EventController::class, 'show'])->name('materias.show');
Route::get('/addmateria', [EventController::class, 'addmateria'])->name('addmateria.addmateria');
Route::get('/dashboard', [EventController::class, 'dashboard'])->name('dashboard.dashboard');

Route::get('/login', [UserController::class , 'index'])->name('login.page');
Route::get('/auth', [UserController::class, 'auth'])->name('auth.user');