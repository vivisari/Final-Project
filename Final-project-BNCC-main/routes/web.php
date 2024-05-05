<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin1Controller;


Route::get("/", [admin1Controller::class,'show'])->name('show');
Route::get("/login", [admin1Controller::class,'login'])->name('login');
Route::post("/store", [admin1Controller::class,'store'])->name('store');
Route::get("/edit/{id}", [admin1Controller::class,'edit'])->name('edit');
Route::patch("/update/{id}", [admin1Controller::class,'update'])->name('update');
Route::delete("/delete/{id}", [admin1Controller::class,'delete'])->name('delete');

