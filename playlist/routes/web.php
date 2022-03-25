<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Http\Middleware\ValidateAPIMiddleware;

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

Route::get('/generatePlaylist', [PlaylistController::class, 'generatePlaylist']);

Route::group(['prefix' => 'api'], function () {
    Route::middleware([ValidateAPIMiddleware::class])->group(function () {
        Route::get('playlists',  [PlaylistController::class, 'showAllPlaylists']);
    });
});
