<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//login

//account



// Biblioteca
Route::get('/Biblioteca',[App\Http\Controllers\BibliotecaController::class,'index']);
Route::post('/Biblioteca',[App\Http\Controllers\BibliotecaController::class,'index']);


// citotor


//carte


//imprumnut


//restiture

//// levike

/// jonapot





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
