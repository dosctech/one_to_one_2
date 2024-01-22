<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'show']);

Route::get('students/{student}/edit', [StudentController::class, 'edit']);

Route::get('students/{student}/display', [StudentController::class, 'display']);

Route::get("/profile", function(){
    return view('showStudent');
});
