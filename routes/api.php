<?php

use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register',[RegisterController::class,'store'])->name('api.register');
Route::get('/', function () {return view('welcome');});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {Route::get('/dashboard', function ()
{return view('dashboard'); })->name('dashboard'); Route::get('/profile',[UsuarioController::class,'profile']);});

Route::get('/auth/redirect',[AuthController::class,'redirect']);
Route::get('/auth/callback-url',[AuthController::class,'redirect']);