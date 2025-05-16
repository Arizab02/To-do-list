<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\ToDoList;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('app', ToDoList::class);

// ->middleware(['auth'])->name('dashboard');

