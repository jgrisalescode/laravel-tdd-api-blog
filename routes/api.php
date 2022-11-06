<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('articles/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'show'])->name('api.v1.articles-show');
});
