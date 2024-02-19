<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Models\Song;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[SongController::class,"songs"]);

Route::get('/index',[SongController::class,"songs"]);

Route::get('/songs',[SongController::class,"songs"]);

Route::get('/share', function() {
    return view('share');
});
Route::get('/songs/{id}',[SongController::class,"Song"]);

Route::post('/share',[SongController::class,"share"]);










