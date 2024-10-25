<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TargetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::prefix('admin')->group(function () {
    Route::get('/targets', [TargetController::class, 'index'])->name('targets');
    Route::get('/targets/{id}', [TargetController::class, 'show'])->name('targets.show');
    Route::get('/targets/{id}/edit', [TargetController::class, 'edit'])->name('targets.edit');
    Route::put('/targets/{id}', [TargetController::class, 'update'])->name('targets.update');
    Route::delete('/targets/{id}', [TargetController::class, 'destroy'])->name('targets.destroy');
});
