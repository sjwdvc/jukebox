<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SongController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/song', [SongController::class, 'index'])->name('viewSongs');
Route::get('/song/view/{song}', [SongController::class, 'show'])->name('viewSong');
Route::get('/song/delete/{song}', [SongController::class, 'delete'])->name('deleteSong');
Route::post('/song/destroy/{song}', [SongController::class, 'destroy'])->name('destroySong');
Route::get('/song/edit/{song}', [SongController::class, 'edit'])->name('editSong');
Route::patch('/song/update/{song}', [SongController::class, 'update'])->name('updateSong');
Route::get('/song/create', [SongController::class, 'create'])->name('createSong');
Route::post('/song/store', [SongController::class, 'store'])->name('storeSong');

Route::get('/genre', [GenreController::class, 'index'])->name('viewGenres');
Route::get('/genre/{genre}', [GenreController::class, 'show'])->name('viewGenre');
Route::get('/genre/delete/{genre}', [GenreController::class, 'delete'])->name('deleteGenre');
Route::post('/genre/destroy/{genre}', [GenreController::class, 'destroy'])->name('destroyGenre');
Route::get('/genre/edit/{genre}', [GenreController::class, 'edit'])->name('editGenre');
Route::patch('/genre/update/{genre}', [GenreController::class, 'update'])->name('updateGenre');
Route::get('/genre/create', [GenreController::class, 'create'])->name('createGenre');
Route::post('/genre/store', [GenreController::class, 'store'])->name('storeGenre');


Route::resource('playlist', PlaylistController::class);
//Route::get('/playlist', [PlaylistController::class, 'index'])->name('viewPlaylist');
//Route::get('/playlist/{playlist}', [PlaylistController::class, 'show'])->name('viewGenre');
//Route::get('/playlist/delete/{playlist}', [PlaylistController::class, 'delete'])->name('deleteGenre');
//Route::post('/playlist/destroy/{playlist}', [PlaylistController::class, 'destroy'])->name('destroyGenre');
//Route::get('/playlist/edit/{playlist}', [PlaylistController::class, 'edit'])->name('editGenre');
//Route::patch('/playlist/update/{playlist}', [PlaylistController::class, 'update'])->name('updateGenre');
//Route::get('/playlist/create', [PlaylistController::class, 'create'])->name('createGenre');
//Route::post('/playlist/store', [PlaylistController::class, 'store'])->name('storeGenre');

require __DIR__.'/auth.php';
