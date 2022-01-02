<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/test', [App\Http\Controllers\IndexController::class, 'test']);
Route::get('/create', [App\Http\Controllers\BlogController::class, 'create']);
Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index']);
//Route::post('/store', [App\Http\Controllers\BlogController::class, 'store']);


Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/store', [App\Http\Controllers\LoginController::class, 'store']);
Route::post('/validate', [App\Http\Controllers\LoginController::class, 'validateUser']);
Route::get('/signup', [App\Http\Controllers\LoginController::class, 'signup']);
Route::get('/home/loggedin', [App\Http\Controllers\LoginController::class, 'homeloggedin']);

Route::get('/home/loggedin/create', [App\Http\Controllers\PublishController::class, 'create']);
Route::get('/publish', [App\Http\Controllers\PublishController::class, 'create']);

//Route::get('/products', [ProductsController::class, 'index']);
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Route::get('/posts', [PostsController::class, 'index']);

//Route::get('/users', function (){
//    return 'Welcome to users';
//});

//Route to users - Array(JSON)
//Route::get('/users', function (){
//    return ['PHP', 'HTML', 'Laravel'];
//});

//Route to users - JSON object
//Route::get('/users', function (){
//    return response()->json([
//        'name' => 'Rifah',
//        'course' => 'CSE470'
//    ]);
//});

//Route to users - function
Route::get('/users', function (){
    return redirect('/');
});