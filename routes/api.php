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
Route::post('training_center/store', [TrainingCenterController::class, 'store']);
Route::get('training_center/list', [TrainingCenterController::class, 'index']);

//areas
Route::post('area/store', [AreaController::class, 'store']);
Route::get('area/list', [AreaController::class, 'index']);

//computer
Route::post('computer/store', [ComputerController::class, 'store']);
Route::get('computer/list', [ComputerController::class, 'index']);

//aprendice
Route::post('aprendice/store', [AprendiceController::class, 'store']);
Route::get('aprendice/list', [AprendiceController::class, 'index']);

//cursos
Route::post('course/store', [CourseController::class, 'store']);
Route::get('course/list', [CourseController::class, 'index']);