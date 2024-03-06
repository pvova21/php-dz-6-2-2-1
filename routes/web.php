<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
Route::post('/groups', [GroupController::class, 'store'])->name('groups.store');
Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create');
Route::get('/groups/{group}', [GroupController::class, 'show'])->name('groups.show');

Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('groups.students.store');
Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('groups.students.create');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('groups.students.show');