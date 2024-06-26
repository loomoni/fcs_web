<?php

use App\Http\Controllers\Backend\Aboutus\AboutUsController;
use App\Http\Controllers\Backend\Aboutus\CoresValuesController;
use App\Http\Controllers\Backend\Blog\BlogController;
use App\Http\Controllers\Backend\Client\OurClientController;
use App\Http\Controllers\Backend\Contact\ContactsInformationController;
use App\Http\Controllers\Backend\Faq\FaqController;
use App\Http\Controllers\Backend\Grants\GrantsController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\Process\ProcessThrougController;
use App\Http\Controllers\Backend\Team\TeamController;
use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Frontend\FrontendController;
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

// Route::get('/', function () {
//     return view('frontend.components.Home.main');

// });

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'AuthLogin']);

Route::get('/', [FrontendController::class, 'index']);
Route::get('about-us', [FrontendController::class, 'AboutUs']);
Route::get('our-governance', [FrontendController::class, 'OurGovernance']);
Route::get('our-approach', [FrontendController::class, 'Approach']);
Route::get('get-involved', [FrontendController::class, 'GetInvolved']);
Route::get('media', [FrontendController::class, 'Media']);



Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', [HomeController::class, 'Dashboard']);

    //About us route
    Route::get('aboutus', [AboutUsController::class, 'index']);
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

    //Process route
    Route::get('process', [ProcessThrougController::class, 'index']);
    Route::get('process/create', [ProcessThrougController::class, 'Create']);
    Route::post('process/create', [ProcessThrougController::class, 'Store']);
    Route::get('process/edit/{id}', [ProcessThrougController::class, 'edit']);
    Route::post('process/edit/{id}', [ProcessThrougController::class, 'update']);
    Route::get('process/delete/{id}', [ProcessThrougController::class, 'delete']);

    //Team route
    Route::get('team', [TeamController::class, 'index']);
    Route::get('team/create', [TeamController::class, 'Create']);
    Route::post('team/create', [TeamController::class, 'Store']);
    Route::get('team/edit/{id}', [TeamController::class, 'edit']);
    Route::post('team/edit/{id}', [TeamController::class, 'update']);
    Route::get('team/delete/{id}', [TeamController::class, 'delete']);

    //Our Client route
    Route::get('our-client', [OurClientController::class, 'index']);
    Route::get('our-client/create', [OurClientController::class, 'Create']);
    Route::post('our-client/create', [OurClientController::class, 'Store']);
    Route::get('our-client/edit/{id}', [OurClientController::class, 'edit']);
    Route::post('our-client/edit/{id}', [OurClientController::class, 'update']);
    Route::get('our-client/delete/{id}', [OurClientController::class, 'delete']);

    //Contant information route
    Route::get('contacts', [ContactsInformationController::class, 'index']);
    Route::get('contacts/create', [ContactsInformationController::class, 'Create']);
    Route::post('contacts/create', [ContactsInformationController::class, 'Store']);
    Route::get('contacts/edit/{id}', [ContactsInformationController::class, 'edit']);
    Route::post('contacts/edit/{id}', [ContactsInformationController::class, 'update']);
    Route::get('contacts/delete/{id}', [ContactsInformationController::class, 'delete']);

    //grants route
    Route::get('grants', [GrantsController::class, 'index']);
    Route::get('grants/create', [GrantsController::class, 'Create']);
    Route::post('grants/create', [GrantsController::class, 'Store']);
    Route::get('grants/edit/{id}', [GrantsController::class, 'edit']);
    Route::post('grants/edit/{id}', [GrantsController::class, 'update']);
    Route::get('grants/delete/{id}', [GrantsController::class, 'delete']);


    

});
