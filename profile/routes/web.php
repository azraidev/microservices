<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('index');
});
Route::post('/generateUser', [UserController::class,'generateUser']);
Route::post('/deleteUser', [UserController::class,'deleteUser']);
Route::get('/selectUser/{id}', [UserController::class,'selectUser']);


Route::group(['prefix' => 'api'], function () {
    Route::middleware([ValidateAPIMiddleware::class])->group(function () {
        Route::get('users',  [UserController::class, 'showAllUsers']);

        Route::get('users/{id}', [UserController::class, 'showOneUser']);

        Route::post('users', [UserController::class, 'create']);

        Route::delete('users/{id}', [UserController::class, 'delete']);

        Route::put('users/{id}', [UserController::class, 'update']);
    });
});

Route::resource('userPreference', '\App\Http\Controllers\UserPreferenceController');
