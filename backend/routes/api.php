<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\listFilmController;
use App\Http\Controllers\TagController;
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
Route::get('/filmsasc', [FilmController::class, 'indexAsc'])->name('list-films-asc');
Route::get('/filmsdesc', [FilmController::class, 'indexDesc'])->name('list-films-desc');
Route::post('/addfilm', [FilmController::class, 'addFilm'])->name('add-film');
Route::get('/editfilm/{id}', [FilmController::class, 'editFilm'])->name('edit-film');
Route::put('/updatefilm/{id}', [FilmController::class, 'updateFilm'])->name('update-film');
Route::delete('/deletefilm/{id}', [FilmController::class, 'deleteFilm'])->name('delete-film');
Route::get('/filmcategory', [FilmController::class, 'filmCategory'])->name('film-category');
Route::get('/singlefilm/{id}', [FilmController::class, 'singleFilm'])->name('single-film');

// Route of Tags
Route::get('/tags', [TagController::class, 'getTags'])->name('get-tags');
Route::post('/addtag', [TagController::class, 'addTag'])->name('add-tag');
Route::get('/singletag/{id}', [TagController::class, 'singleTag'])->name('single-tag');
Route::get('edittag/{id}',  [TagController::class, 'editTag'])->name('edit-tag');
Route::put('updatetag/{id}', [TagController::class, 'updateTag'])->name('update-tag');
Route::delete('/deletetag/{id}', [TagController::class, 'deleteTag'])->name('delete-tag');

Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
