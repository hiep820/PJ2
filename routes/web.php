<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectsController;
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


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource("book",BookController::class);
Route::resource("subjects",SubjectsController::class);

Route::prefix("student")->name('student.')->group(function () {
    Route::resource("/", StudentController::class);
    Route::get('hide/{id}', [StudentController::class, 'hide'])->name('hide');
});
