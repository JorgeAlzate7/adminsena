<?php

use App\Http\Controllers\ComputerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
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

//training_center
Route::post('aprendice/store', [AprendiceController::class, 'store'])->name('aprendice.store');
Route::get('aprendice/list', [AprendiceController::class, 'index'])->name('aprendice.index');
Route::get('aprendice/show/{id}',[AprendiceController::class,'show'])->name('aprendice.show');
Route::put('aprendice/{aprendice}', [AprendiceController::class, 'update'])->name('aprendice.update');
Route::delete('aprendice/{aprendice}', [AprendiceController::class, 'destroy'])->name('aprendice.destroy');



//areas
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/list', [AreaController::class, 'index'])->name('area.index');
Route::get('area/show/{id}',[AreaController::class,'show'])->name('area.show');
Route::put('area/{area}', [AreaController::class, 'update'])->name('area.update');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('area.destroy');




//computer
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/list', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/show/{id}',[ComputerController::class,'show'])->name('computer.show');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');


//aprendice
Route::post('aprendice/store', [AprendiceController::class, 'store']);
Route::get('aprendice/list', [AprendiceController::class, 'index']);
Route::post('aprendice/create', [AprendiceController::class, 'create']);
Route::delete('aprendice/{aprendice}', [AprendiceController::class, 'destroy']);
Route::get('aprendice/show/{id}',[AprendiceController::class,'show'])->name('aprendice.show');


//cursos
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/list', [CourseController::class, 'index'])->name('course.index');
Route::get('course/show/{id}',[CourseController::class,'show'])->name('course.show');
Route::put('course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');

//teachers
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/list', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/show/{id}',[TeacherController::class,'show'])->name('teacher.show');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');


