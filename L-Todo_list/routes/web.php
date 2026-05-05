<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
   return view('welcome');
});
*/

#-------------------------- HOME PAGE ----------------------------------------------------------------------------------------
Route::get('/', [App\Http\Controllers\MyhomeController::class, 'index'])->name('homepage');

Auth::routes();

#---------------------------------- LOGIN HOME PAGE --------------------------------------------------------------------------
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#-------------------------- DASHBOARD ----------------------------------------------------------------------------------------
Route::get('/dashboard', [App\Http\Controllers\MyDataController::class, 'dashboard'])->name('dashboard1');

#----------------------------- ADD List --------------------------------------------------------------------------------------
Route::get('/add', [App\Http\Controllers\MyDataController::class, 'add'])->name('adddata');
Route::post('/add', [App\Http\Controllers\MyDataController::class, 'addstore'])->name('addstore');

#----------------------------- DELETE List -----------------------------------------------------------------------------------
Route::get('/delete/{id}', [App\Http\Controllers\MyDataController::class, 'delete']);

#----------------------------- EDIT List -----------------------------------------------------------------------------------
Route::get('/edit/{id}', [App\Http\Controllers\MyDataController::class, 'edit']);
Route::post('/update',[App\Http\Controllers\MyDataController::class, 'update'])->name('data.update');