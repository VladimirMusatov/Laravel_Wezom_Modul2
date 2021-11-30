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

//Сохранение отзыва
Route::get('/store',[PostController::class, 'store'])->name('store');
//Вывод списка отзывов с разбивкой по страницам
Route::get('/home',[PostController::class, 'index'])->name('index');
//Добавление отзыва
Route::get('/form',[PostController::class,'create'])->name('create');


// Роуты доступны лишь пользователю с ролью админ
Route::group(['middleware'=>['role:admin']],function(){

    //Вывод списка отзывов
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    //Обновление отзыва
    Route::put('/update/{id}',[AdminController::class, 'update'])->name('update');
    //Удаление отзыва
    Route::get('/delete/{id}',[AdminController::class, 'destroy'])->name('delete');
    //Редактирование отзыва 
    Route::get('/edit/{id}',[AdminController::class, 'edit'])->name('edit');

}); 