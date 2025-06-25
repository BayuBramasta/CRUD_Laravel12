<?php

use App\Http\Controllers\personcontroller;
use App\Http\Controllers\createcontroller;
use App\Http\Controllers\editcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// display data
Route::get('/person', [personcontroller::class,'index'])->name('person.index');
Route::post('/person', [personcontroller::class,'store'])->name('person.store');
Route::post('/person', [personcontroller::class,'show'])->name('person.show');

// delete
Route::get('/person/{id}/destroy', [personcontroller::class,'destroy'])->name('person.destroy');

// create data
Route::get('/create', [createcontroller::class,'index'])->name('create.index');
Route::post('/create', [createcontroller::class,'store'])->name('create.store');

// edit data
Route::get('/edit/{id}/edit', [editcontroller::class,'edit'])->name('edit.index');
Route::post('/edit/{id}/edit', [editcontroller::class,'update'])->name('edit.update');
