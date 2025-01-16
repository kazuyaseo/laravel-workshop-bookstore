<?php

declare(strict_types=1);

use App\Http\Controllers\BookController;

Route::post('/books', [BookController::class, 'create']);
