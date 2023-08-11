<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

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



Route::get('/', [PropertyController::class, 'index'])->name('home');

Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create')->middleware('auth');
Route::post('/property/store', [PropertyController::class, 'store'])->name('property.store');

Auth::routes();
