<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::get('create', [ArticleController::class, 'create'])->name('create');
Route::post('store', [ArticleController::class, 'store'])->name('store');
Route::get('show', [ArticleController::class, 'show'])->name('show');
