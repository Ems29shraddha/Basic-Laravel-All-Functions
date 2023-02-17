<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
    return view('auth.signup');
})->name('signup.view');

Route::get('signin', function () {
    return view('auth.signin');
})->name('signin.view');


Route::post('signup',[AuthController::class,'signup'])->name('signup');
Route::post('signin',[AuthController::class,'signin'])->name('signin');
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('admin/dashboard',[AuthController::class,'adminDashboard'])->name('admin.dashboard');

Route::get('admin/addProduct',[ProductController::class,'addProductForm'])->name('admin.addProduct');
Route::post('admin/AddBrand',[ProductController::class,'addBrand'])->name('admin.addBrand');

