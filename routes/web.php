<?php

use App\Http\Controllers\ContactosController;
use App\Http\Controllers\TaskController;
use App\Mail\ContactosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('task', TaskController::class)->names('tasks');
Route::view('nosotros','nosotros')->name('nosotros');


Route::get('contactanos',[ContactosController::class,'index'])
->name('contactanos.index');

Route::post('contactanos',[ContactosController::class,'store'])
->name('contactanos.store');
