<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[UsersController::class, 'index']);
Route::get('/edit/{id}', [UsersController::class, 'edit']);
Route::get('/show/{id}', [UsersController::class, 'show']);
Route::get('/create', [UsersController::class, 'create']);
Route::post('/store', [UsersController::class, 'store']);
Route::post('/update/{id}', [UsersController::class, 'update']);
// Route::post('/destroy/{id}', 'UsersController@destroy');
