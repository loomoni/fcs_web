<?php

use App\Http\Controllers\Backend\Aboutus\AboutUsController;
use App\Http\Controllers\Backend\Aboutus\CoresValuesController;
use App\Http\Controllers\Backend\Blog\BlogController;
use App\Http\Controllers\Backend\Faq\FaqController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\Team\TeamController;
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

    //About us route
    Route::get('about-us', [AboutUsController::class, 'index']);
    Route::get('about-us/create', [AboutUsController::class, 'Create']);
    Route::post('about-us/create', [AboutUsController::class, 'Store']);
    Route::get('about-us/edit/{id}', [AboutUsController::class, 'edit']);
    Route::post('about-us/edit/{id}', [AboutUsController::class, 'update']);
    Route::get('about-us/delete/{id}', [AboutUsController::class, 'delete']);

    //Blog route
    Route::get('blog', [BlogController::class, 'index']);
    Route::get('blog/create', [BlogController::class, 'Create']);
    Route::post('blog/create', [BlogController::class, 'Store']);
    Route::get('blog/edit/{id}', [BlogController::class, 'edit']);
    Route::post('blog/edit/{id}', [BlogController::class, 'update']);
    Route::get('blog/delete/{id}', [BlogController::class, 'delete']);

    //FAQ route
    Route::get('faq', [FaqController::class, 'index']);
    Route::get('faq/create', [FaqController::class, 'Create']);
    Route::post('faq/create', [FaqController::class, 'Store']);
    Route::get('faq/edit/{id}', [FaqController::class, 'edit']);
    Route::post('faq/edit/{id}', [FaqController::class, 'update']);
    Route::get('faq/delete/{id}', [FaqController::class, 'delete']);

    //Core values route
    Route::get('values', [CoresValuesController::class, 'index']);
    Route::get('values/create', [CoresValuesController::class, 'Create']);
    Route::post('values/create', [CoresValuesController::class, 'Store']);
    Route::get('values/edit/{id}', [CoresValuesController::class, 'edit']);
    Route::post('values/edit/{id}', [CoresValuesController::class, 'update']);
    Route::get('values/delete/{id}', [CoresValuesController::class, 'delete']);

    //Team route
    Route::get('team', [TeamController::class, 'index']);
    Route::get('team/create', [TeamController::class, 'Create']);
    Route::post('team/create', [TeamController::class, 'Store']);
    Route::get('team/edit/{id}', [TeamController::class, 'edit']);
    Route::post('team/edit/{id}', [TeamController::class, 'update']);
    Route::get('team/delete/{id}', [TeamController::class, 'delete']);


    

});
