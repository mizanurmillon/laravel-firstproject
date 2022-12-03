<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/all.contacts',[AboutController::class,'Contact'])->name('all.contacts');
Route::get('/insert',[AboutController::class,'Insert']);
Route::post('/data',[AboutController::class,'DataAdded']);
Route::get('/delete-contact/{id}',[AboutController::class,'Delete']);
Route::get('/edit-contact/{id}',[AboutController::class,'Edit']);
Route::post('/update/{id}',[AboutController::class,'Update']);
Route::get('/view-contact/{id}',[AboutController::class,'View']);