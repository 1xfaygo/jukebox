<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

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
    return view('Artist');
});

Route::get('albums', function(){
    return view('albums');
});

Route::get('songs', function(){
    return view('songs');
});


Route::get('playlist',function(){
    return view('playlist');
});

Route::get('genre',function(){
    return view('genres');
});


Route::get('/', [ArtistController::class, 'index']);

Route::get('/artists', [ArtistController::class, 'list']);
