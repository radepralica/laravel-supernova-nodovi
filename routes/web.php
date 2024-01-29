<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlicNodController;
use App\Http\Controllers\ProfileController;

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

//&Login/register
Route::get('/', [UserController::class,'home'])->name('login');
Route::get('/register', [UserController::class,'registerView'])->name('user.register');
Route::post('/register', [UserController::class,'register']);
Route::get('/login', [UserController::class,'loginView'])->name('user.login');
Route::post('/login', [UserController::class,'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');


//&Nodovi
Route::get('/', [BlicNodController::class, 'home'])->name('blic.home');
Route::post('/', [BlicNodController::class, 'display'])->name('blic.display');
Route::get('/search-nodes', [BlicNodController::class, 'search']);

//&Management

Route::get('/admin',[AdminController::class,'adminhome'])->name('admin.home');
Route::get('/create', [AdminController::class, 'create'])->name('admin.create')->middleware('auth');
Route::post('/create', [AdminController::class, 'store'])->name('admin.store');
Route::get('nod/{nod}',[AdminController::class,'edit'])->name('admin.edit')->middleware('auth');
Route::put('/nod/{nod}',[AdminController::class,'update'])->name('admin.update');
Route::post('/nod/{nod}',[AdminController::class,'destroy'])->name('admin.delete');






