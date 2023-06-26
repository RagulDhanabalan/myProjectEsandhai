<?php

use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/show', function () {
    return view('show-page');
});
Route::get('/create', function () {
    return view('create-page');
});
Route::get('/edit', function () {
    return view('edit-page');
});
Route::get('/delete', function () {
    return view('delete-page');
});
Route::get('/insert', function () {
    return view('show-page');
});
// Route::get('/show',[StudentsController::class,'insert_form']);
// Route::post('index',[StudentsController::class,'index']);
