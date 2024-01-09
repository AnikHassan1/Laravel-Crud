<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// student.index
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
