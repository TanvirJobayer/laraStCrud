<?php

use App\Http\Controllers\LibraryRecordController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


// Student Routes

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/create', [StudentController::class, 'create']);

Route::post('/students', [StudentController::class, 'store']);

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/students/{id}/edit', [StudentController::class, 'edit']);

Route::put('/students/{id}', [StudentController::class, 'update']);

Route::delete('/students/{id}', [StudentController::class, 'destroy']);



// Library Record Routes

Route::get('/library records', [LibraryRecordController::class, 'index']);
