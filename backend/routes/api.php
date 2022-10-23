<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\listFilmController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Routes of users
Route::get('/listUser', [UserController::class, 'listUser'])->name('list-user');
Route::get('/listUserLine/{user}', [UserController::class, 'listUserLine'])->name('list-user-line');
Route::post('/adduser', [UserController::class, 'addUser'])->name('add-user');
Route::get('/edit/{user}', [UserController::class, 'editUser'])->name('edit-user');
Route::put('/update/{user}', [UserController::class, 'updateUser'])->name('update-user');
Route::delete('/delete{user}', [UserController::class, 'deleteUser'])->name('delete-user');

// Routes of Films
Route::get('/films', [FilmController::class, 'index'])->name('list-films');
Route::post('/addfilm', [FilmController::class, 'addFilm'])->name('add-film');
Route::get('/editfilm/{id}', [FilmController::class, 'editFilm'])->name('edit-film');
Route::put('/updatefilm/{id}', [FilmController::class, 'updateFilm'])->name('update-film');
Route::delete('/deletefilm/{id}', [FilmController::class, 'deleteFilm'])->name('delete-film');


Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
