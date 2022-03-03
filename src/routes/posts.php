<?php

use Illuminate\Support\Facades\Route;
use Skriptoff\Posts\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
