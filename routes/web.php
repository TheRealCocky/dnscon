<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/users', function () {
   // return view('users');
//});
//Route::get('/add/user', function () {
    //return view('add-user');
//});
Route::get('/users',[UserController::class,'loadAllUsers']);
Route::get('/add/user',[UserController::class,'loadAddUserFrom']);

Route::post('/add/user',[UserController::class,'AddUser'])->name('AddUser');


Route::get('/edit/{id}',[UserController::class,'loadEditForm']);
Route::get('/delete/{id}',[UserController::class,'deleteUser']);

Route::post('/edit/user',[UserController::class,'EditUser'])->name('EditUser');

Route::get('/',[UserController::class,'home']);