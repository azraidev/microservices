<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PlaylistController;

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
    $random = str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT);
    dd($random);
    return view('welcome');
});


Route::get('/generatePlaylist', [PlaylistController::class, 'generatePlaylist']);
