<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\EtudiantController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('etudiants', [EtudiantController::class,'index']);

Route::get('etudiants/{id}', [EtudiantController::class,'get_a']);

Route::post('etudiants', [EtudiantController::class,'upload']);

Route::put('etudiants/{id}/edit', [EtudiantController::class,'edit']);

Route::delete('etudiants/{id}/delete', [EtudiantController::class,'delete']);

//###############################
// Route::get('student', [StudentController::class,'index']);

// Route::get('student/{id}', [StudentController::class,'get_a']);


// Route::post('student', [StudentController::class,'upload']);

// Route::put('student/edit/{id}', [StudentController::class,'edit']);

// Route::delete('student/delete/{id}', [StudentController::class,'delete']);