<?php

namespace App\Http\Controllers\Admin\Books;


use App\Http\Requests\Admin\Books\UpdateRequest;
use App\Models\Book;

class UpdateController
{
    public function __invoke(UpdateRequest $request,Book $book)
    {
        $data = $request->validated();
        $genres = $data['genres'];
        unset($data['genres']);
        $book->update($data);
        $book->genre()->sync($genres);
        return redirect()->route('admin.books.show',compact('book'));
    }
}
