<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\classesController;
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

Route::get('/details/{id}',[UserController::class, 'details'])->name('details');
// class.index
Route::get('/class/index',[UserController::class,"class"])->name('class.index');
// student.index
Route::get('/student/index',[UserController::class,"student"])->name('student.index');
Route::get('/student/Create',[UserController::class,"studentCreate"])->name('student.Create');
Route::post('/Student/Store',[UserController::class,"StudentStore"])->name('Student.Store');
Route::get('/student/delete/{id}',[UserController::class,"studentDelete"])->name('student.delete');
Route::get('/student/update/{id}',[UserController::class,"studentupdate"])->name('student.update');
// student.index class.Store
// classes start
Route::get('/class/index',[classesController::class,'classIndex'])->name('class.index');
Route::get('/class/Create',[classesController::class,"classCreate"])->name('class.Create');
Route::post('/class/Store',[classesController::class,"classStore"])->name('class.Store');
Route::get('/student/Delete/{id}',[classesController::class,"classdelete"])->name('student.Delete');
Route::get('/student/update/{id}',[classesController::class,"classUpdate"])->name('student.update');
// class end
Route::get('/laravel',function(){
    return view('laravel');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
