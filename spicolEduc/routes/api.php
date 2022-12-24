<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AsignatureController;
use App\Http\Controllers\TeacherController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Create route group for student
Route::group(['prefix' => 'student'], function () {
    //Route to create a student
    Route::post('create', [StudentController::class, 'studentCreate']);
    //Route to update a student
    Route::put('update/{id}', [StudentController::class, 'studentUpdate']);
    //Route to delete a student
    Route::delete('delete/{id}', [StudentController::class, 'studentDelete']);
    //Route to list a student
    Route::get('list', [StudentController::class, 'list']);  
     //Route list student by id
    Route::get('list/{id}', [StudentController::class, 'studentlist']);
    //Route information student by id
    Route::get('information/{id}', [StudentController::class, 'studentInformation']);
});
//Create route group for asignature
Route::group(['prefix' => 'asignature'], function () {
    //Route to create a asignature
    Route::post('create', [AsignatureController::class, 'asignatureCreate']);
    //Route to update a asignature
    Route::put('update/{id}', [AsignatureController::class, 'asignatureUpdate']);
    //Route to delete a asignature
    Route::delete('delete/{id}', [AsignatureController::class, 'asignatureDelete']);
    //Route to list a asignature
    Route::get('list', [AsignatureController::class, 'asignaturelist']);    
});
//Create route group for teacher
Route::group(['prefix' => 'teacher'], function () {
    //Route to create a teacher
    Route::post('create', [TeacherController::class, 'teacherCreate']);
    //Route to update a teacher
    Route::put('update/{id}', [TeacherController::class, 'teacherUpdate']);
    //Route to delete a teacher
    Route::delete('delete/{id}', [TeacherController::class, 'teacherDelete']);
    //Route to list a teacher
    Route::get('list', [TeacherController::class, 'teacherlist']);    
});
