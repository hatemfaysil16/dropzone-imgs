<?php

use App\Http\Controllers\imageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dropzone', [imageController::class,'dropzone'])->name('dropzone');
Route::post('document_upload', [imageController::class,'document_upload'])->name('document_upload');
