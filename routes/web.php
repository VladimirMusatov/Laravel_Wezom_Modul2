<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
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


Auth::routes();
Route::redirect('/','/home');

//Общедоступные роуты
Route::get('/store',[PostController::class, 'store'])->name('store');
Route::get('/home',[PostController::class, 'index'])->name('index');
Route::get('/form',[PostController::class,'create'])->name('create');


// Роуты доступны лишь пользователю с ролью админ
Route::group(['middleware'=>['role:admin']],function(){

    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    Route::put('/update/{id}',[AdminController::class, 'update'])->name('update');
    Route::get('/delete/{id}',[AdminController::class, 'destroy'])->name('delete');
    Route::get('/edit/{id}',[AdminController::class, 'edit'])->name('edit');

}); 