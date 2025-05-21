<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;


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







Route::get('artists', function(){
    return view('Artists');
});
// artist routes:
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');
Route::delete('/artists/{artist}', [ArtistController::class, 'destroy'])->name('artists.destroy');



Route::get('albums', function(){
    return view('albums');
});







Route::get('songs', function(){
    return view('songs');
});
// Songs Routes
Route::resource('songs', SongController::class);









Route::get('genres',function(){
    return view('genres');
});
// Genre Routes
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');








// Playlist Routes
Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist.index');
Route::post('/playlist', [PlaylistController::class, 'store'])->name('playlist.store');
Route::get('/playlist/{playlist}', [PlaylistController::class, 'show'])->name('playlist.show');



