<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\AttendanceController;

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

Route::get('/', [AddStudentController::class, 'index']);
Route::get('/add', [AddStudentController::class, 'create']);
Route::post('/addStudent', [AddStudentController::class, 'store']);
Route::post('/addattendance', [AttendanceController::class, 'store']);