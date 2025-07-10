<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;
use App\Models\Collection;

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
    return view('layouts.main');
});


Route::get('/user', [UserController::class, 'index']);
Route::get('/userRegistration', [UserController::class, 'create']);
Route::post('/userStore', [UserController::class, 'store']);
Route::get('/userView/{user}', [UserController::class, 'show']);
Route::get('/koleksi', [CollectionController::class, 'index']);
Route::get('/koleksiTambah', [CollectionController::class, 'create']);
Route::post('/koleksiStore', [CollectionController::class, 'store']);
Route::get('/koleksiView/{collection}', [CollectionController::class, 'show']);