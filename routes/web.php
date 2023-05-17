<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;



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

Route::get('/profiles',  [ProfileController::class, 'index']);

Route::get('/',  [HomeController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Profiles
|--------------------------------------------------------------------------
*/

//Route::get('/profile', [ProfileController::class, 'index']);

/*
    |--------------------------------------------------------------------------
    | Pessoas
    |--------------------------------------------------------------------------
    */
$prefix = 'profile';
$controller = 'ProfileController';

Route::group(['prefix' => $prefix, 'as' => $prefix . '.'], function () use ($controller) {
    Route::get('/',  [ProfileController::class, 'index']);
    Route::get('/create', ['as' => 'create', 'uses' => $controller . '@create']);
    Route::post('/', ['as' => 'store', 'uses' => $controller . '@store']);
    Route::get('/{id}/show',  [ProfileController::class, 'show']);
    Route::put('/{id}', ['as' => 'update', 'uses' => $controller . '@update']);
    Route::delete('/{id}', ['as' => 'destroy', 'uses' => $controller . '@destroy']);
});
