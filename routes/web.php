<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProjetController;
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

/* ces deux chemins menent a la meme page
Route::get('PROJETS/ajout', [ProjetController::class,'create']);
Route::get('PROJETS/create', [ProjetController::class,'create']);*/

Route::get('/PROJETS/create', [ProjetController::class,'create']);

//fonction d'ajout
Route::POST('/PROJETS/store', [ProjetController::class,'store']);

