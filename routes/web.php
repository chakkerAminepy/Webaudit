<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TargetController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin');
})->name('admin');


// Route::get('/admin/targets', function () {
//     return view('target');
// });

Route::get('/admin/targets', [TargetController::class, 'index'])->name('targets');
