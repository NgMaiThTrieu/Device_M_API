<?php

use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();
#Upload
Route::post('upload/services', [UploadController::class, 'store']);
#Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/faculties', [FacultyController::class, 'index']);
Route::get('/admin/faculties/add', [FacultyController::class, 'create']);
Route::post('/admin/faculties/add', [FacultyController::class, 'store']);
Route::get('/admin/faculties/edit/{faculty}', [FacultyController::class, 'show']);
Route::put('/admin/faculties/edit/{faculty}', [FacultyController::class, 'update']);
Route::delete('/admin/faculties/destroy/{id}', [FacultyController::class, 'delete']);
