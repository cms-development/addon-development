<?php

use Illuminate\Support\Facades\Route;
use RogerthatBe\Like\Http\LikeCPController;

Route::get('/like/index', [LikeCPController::class, "index"])->name('like.index');
Route::get('/like/settings', [LikeCPController::class, "settings"])->name('like.settings');

Route::post('/like/settings', [LikeCPController::class, "addFieldsToCollection"])->name('like.collectionUpdate');