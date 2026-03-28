<?php

use App\Http\Controllers\Admin\StudentController;

Route::get('ping', fn() => response()->json(['status' => 'OK']));

Route::prefix('admin')->group(function () {
    Route::get('students', [StudentController::class, 'index']);
    Route::post('students', [StudentController::class, 'store']);
    Route::get('students/{id}', [StudentController::class, 'show']);
    Route::put('students/{id}', [StudentController::class, 'update']);
    Route::delete('students/{id}', [StudentController::class, 'destroy']);
});