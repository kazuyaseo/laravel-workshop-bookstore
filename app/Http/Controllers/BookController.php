<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BookController
{
    /**
     * @throws ValidationException
     */
    public function create(Request $request): Book
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'isbn' => ['required', 'string'],
        ]);
        $validator->validate();

        // モデルを作成
        $book = new Book($validator->validated());
        $book->save();

        return $book;
    }
}
