<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [App\Http\Controllers\LoginController::class, 'checkIfLoggedIn']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/store', [App\Http\Controllers\LoginController::class, 'store']);
Route::post('/validate', [App\Http\Controllers\LoginController::class, 'validateUser']);
Route::get('/signup', [App\Http\Controllers\LoginController::class, 'signup']);
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout']);


//Route::get('/home/loggedin', [App\Http\Controllers\LoginController::class, 'homeloggedin']);

Route::get('/home/loggedin', [App\Http\Controllers\PublishedWorksController::class, 'getAllWorks']);
Route::get('/sort', [App\Http\Controllers\PublishedWorksController::class, 'getSortedWorks']);
Route::get('/sortLO', [App\Http\Controllers\PublishedWorksController::class, 'getSortedWorksLO']);

Route::get('/selected', [App\Http\Controllers\PublishedWorksController::class, 'getWork']);
Route::get('/loggedout',  [App\Http\Controllers\PublishedWorksController::class, 'getAllWorksLO']);
Route::get('/delete',  [App\Http\Controllers\PublishedWorksController::class, 'delete']);

Route::get('/home/loggedin/create', [App\Http\Controllers\PublishController::class, 'create']);
Route::get('/publish', [App\Http\Controllers\PublishController::class, 'publish']);

Route::get('/profile', [App\Http\Controllers\UserProfileController::class, 'viewProfile' ]);
