<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MaterialController;
use App\Models\Course;
use App\Models\Material;
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

Route::get('/', function () {
    $course = Course::all();
    $materi = Material::all();

    return view('dashboard', [
        'totalcourse' => count($course),
        'totalmateri' => count($materi)
    ]);
})->name('dashboard');

Route::resource('course', CourseController::class)->names('course');
Route::resource('material', MaterialController::class)->names('material');