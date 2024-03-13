<?php

use App\Http\Controllers\Group\GroupResourceController;
use App\Http\Controllers\Group\Student\StudentResourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('groups', GroupResourceController::class);
Route::resource('groups.students', StudentResourceController::class);
//Route::resource('groups', GroupController::class);

//Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
//Route::post('/groups', [GroupController::class, 'store'])->name('groups.store');
//Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create');
//Route::get('/groups/{group}', [GroupController::class, 'show'])->name('groups.show');
//Route::post('/groups/{group}/students', [StudentResourceController::class, 'store'])->name('groups.students.store');
//Route::get('/groups/{group}/students/create', [StudentResourceController::class, 'create'])->name('groups.students.create');
//Route::get('/groups/{group}/students/{student}', [StudentResourceController::class, 'show'])->name('groups.students.show');
