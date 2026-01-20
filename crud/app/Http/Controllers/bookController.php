<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeBookRequest;

abstract class bookController
{
    public function store(storeBookRequest $request)
    {
        bookController::create($request->validated());

        return redirect()
            ->route('books.index')
            ->with('success', 'Book created successfully!');
    }
}
