<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Definición limpia de endpoints de la API
Route::prefix('/')->group(function () {

    // Training Center
    Route::post('training_center/store', [TrainingCenterController::class, 'store'])->name('training_center.store');
    Route::get('training_center/list', [TrainingCenterController::class, 'index'])->name('training_center.index');
    Route::get('training_center/show/{id}', [TrainingCenterController::class, 'show'])->name('training_center.show');
    Route::put('training_center/{training_center}', [TrainingCenterController::class, 'update'])->name('training_center.update');
    Route::delete('training_center/{training_center}', [TrainingCenterController::class, 'destroy'])->name('training_center.destroy');

    // Areas
    Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
    Route::get('area/list', [AreaController::class, 'index'])->name('area.index');
    Route::get('area/show/{id}', [AreaController::class, 'show'])->name('area.show');
    Route::put('area/{area}', [AreaController::class, 'update'])->name('area.update');
    Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('area.destroy');

    // Computer
    Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
    Route::get('computer/list', [ComputerController::class, 'index'])->name('computer.index');
    Route::get('computer/show/{id}', [ComputerController::class, 'show'])->name('computer.show');
Route::put('computer/{id}', [ComputerController::class, 'update'])->name('computer.update');    Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');

    // Aprendice
    Route::post('aprendice/store', [AprendiceController::class, 'store'])->name('aprendice.store');
    Route::get('aprendice/list', [AprendiceController::class, 'index'])->name('aprendice.index');
    Route::get('aprendice/show/{id}', [AprendiceController::class, 'show'])->name('aprendice.show');
    Route::put('aprendice/{aprendice}', [AprendiceController::class, 'update'])->name('aprendice.update');
    Route::delete('aprendice/{aprendice}', [AprendiceController::class, 'destroy'])->name('aprendice.destroy');

    // Course
    Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('course/list', [CourseController::class, 'index'])->name('course.index');
    Route::get('course/show/{id}', [CourseController::class, 'show'])->name('course.show');
    Route::put('course/{course}', [CourseController::class, 'update'])->name('course.update');
    Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');

    // Teacher
    Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('teacher/list', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('teacher/show/{id}', [TeacherController::class, 'show'])->name('teacher.show');
    Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

});