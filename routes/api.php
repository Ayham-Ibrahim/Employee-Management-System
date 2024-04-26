<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

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

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

Route::middleware('auth')->group(function () {
    Route::apiResource('departments', DepartmentController::class);
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('employees', EmployeeController::class);

    ##### Note routes #####
    Route::get('/notes',[NoteController::class, 'index']);
    Route::get('/note/{note}',[NoteController::class, 'show']);
    Route::post('/add-employee-note/{employee}',[NoteController::class, 'storeEmployeeNote']); // ###
    Route::post('/add-department-note/{department}',[NoteController::class, 'storeDepartmentNote']);
    Route::put('/update-note/{note}',[NoteController::class, 'update']);
    Route::delete('/delete-note/{note}',[NoteController::class, 'destroy']);
    ### End Note routes ### 


    ##### restore and forceDelete #####
        Route::get('restore-department/{department}',[DepartmentController::class, 'restore']);
        Route::delete('department-forceDelete/{department}',[DepartmentController::class, 'forceDelete']);
        Route::get('restore-employee/{employee}',[EmployeeController::class, 'restore']);
        Route::delete('empoyee-forceDelete/{employee}',[EmployeeController::class, 'forceDelete']);
    ###################################

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
