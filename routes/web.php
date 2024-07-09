<?php

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
//     return view('welcome');
// });

Route::get('/api/student/1', function () {
    return response()->json([
            "name"=>"test2",
            "email"=>"test2@email.com",
            "phone"=>null,    
    ]);
});


// Route::post('/api/student', function () {
//     return view('welcome');
// });
