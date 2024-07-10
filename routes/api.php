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

Route::get('etudiant', [EtudiantController::class,'index']);

Route::get('etudiant/{id}', [EtudiantController::class,'get_a']);

Route::post('etudiant', [EtudiantController::class,'upload']);

Route::put('etudiant/edit/{id}', [EtudiantController::class,'edit']);

Route::delete('etudiant/delete/{id}', [EtudiantController::class,'delete']);

//###############################
// Route::get('student', [StudentController::class,'index']);

// Route::get('student/{id}', [StudentController::class,'get_a']);


// Route::post('student', [StudentController::class,'upload']);

// Route::put('student/edit/{id}', [StudentController::class,'edit']);

// Route::delete('student/delete/{id}', [StudentController::class,'delete']);