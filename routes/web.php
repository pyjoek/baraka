<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\HistoryController;

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

Route::get('/',function (){
    return view('index');
});
Route::get('/show',[TrackController::class, 'index']); //view all records
Route::post('/add',[TrackController::class, 'store']); //add new records
Route::any('/del/{id}', [TrackController::class, 'delete']); //delete record
Route::get('/backup', [TrackController::class, 'backups']);