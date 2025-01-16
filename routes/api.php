<?php

declare(strict_types=1);

use App\Http\Controllers\BookController;

Route::post('/books', [BookController::class, 'create']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show'])
    ->whereNumber('book');
Route::put('/books/{book}', [BookController::class, 'update'])
    ->whereNumber('book');
