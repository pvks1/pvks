<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChistesController;
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
    return view('chistes');
});

Route::get('/pro', function () {
    return 'pro';
});

Route::get('/chistes1', ChistesController::class);

Route::get('/pruebas', ChistesController::class);