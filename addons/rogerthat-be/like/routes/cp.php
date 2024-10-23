<?php

use Illuminate\Support\Facades\Route;

Route::get('/like/index', function() {
    return "niks";
})->name('like.index');
Route::get('/like/settings', function() {})->name('like.settings');