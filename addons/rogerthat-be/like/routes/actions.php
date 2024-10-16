<?php

use Illuminate\Support\Facades\Route;
use RogerthatBe\Like\Http\LikeController;

// when a user likes a post, this action will handle it
Route::post('/store', [LikeController::class, 'storeLike'])->name('like.store');