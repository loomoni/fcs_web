<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Frontend\Auth\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'AuthLogin']);

Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', [HomeController::class, 'index']);

});
