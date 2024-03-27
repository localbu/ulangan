<?php

use App\Http\Controllers\RoutineController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [RoutineController::class,'show']);
Route::get('/add',[RoutineController::class,'add']);
Route::post('/store',[RoutineController::class,'store']);
Route::get('/{id}/edit',[RoutineController::class,'edit']);
Route::post('/update/{id}',[RoutineController::class,'update']);
Route::delete('/update/{id}',[RoutineController::class,'destroy']);


 

