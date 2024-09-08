<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\UserController;
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

Route::get('/', function (){
    return view("news", ['title'=>'toidicode', 'body' =>'Body']);
});

Route::get('/test',[MyController::class, 'index']);

//create
Route::get('/users/create',[UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'store']);

//update
Route::get('/users/update/{id}',[UserController::class, 'edit']);
Route::post('/users/update/{id}',[UserController::class, 'update']);

//delete 
Route::get('/users/delete/{id}',[UserController::class, 'delete']);

// Read user
Route::get('/users', [UserController::class, 'index']);
