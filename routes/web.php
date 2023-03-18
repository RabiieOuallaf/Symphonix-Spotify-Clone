<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use app\Http\Controllers\Bands;
use app\Http\Controllers\Musics;
use app\Http\Controllers\Clients;
use app\Http\Controllers\Artists;
use App\Http\Controllers\MusicsController;
use App\Http\Controllers\PagesController;

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
// Generale routing 
Route::get('/', [PagesController::class, 'Main'])
    ->middleware(['auth', 'auth:web']);

Route::get('/songs', [MusicsController::class, 'displayMusic']);
// Register routing 
Route::get('/register' , [UsersController::class , 'registerPage']);
Route::post('/register/authentication', [UsersController::class, 'storeUserData']);

// Login routing 

Route::get('/login', [UsersController::class, 'loginPage'])->name('login');
Route::post('/login/authentication', [UsersController::class, 'credentialsVerification']);

// logout route
Route::get('/logout', [UsersController::class, 'logout']);

// ADMIN ROUTING 
Route::get('/dashbaord', [UsersController::class, 'dashbaordPage']);





