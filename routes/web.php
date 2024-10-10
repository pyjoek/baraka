<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AlltableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/alll', [AlltableController::class, 'index']);

Route::get('/', [AddStudentController::class, 'show']);
Route::get('/dates', [AlltableController::class, 'index']);
Route::get('/add', [AddStudentController::class, 'create'])->middleware(['auth']);
Route::get('/adat', [AddStudentController::class, 'index'])->middleware(['auth']);
Route::post('/addStudent', [AddStudentController::class, 'store'])->middleware(['auth']);
Route::post('/addattendance', [AttendanceController::class, 'store'])->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';