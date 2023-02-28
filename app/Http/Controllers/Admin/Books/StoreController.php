<?php

namespace App\Http\Controllers\Admin\Books;



use App\Http\Requests\Admin\Books\StoreRequest;
use App\Models\Book;

class StoreController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $genres = $data['genres'];
        unset($data['genres']);
        $book = Book::create($data);
        $book -> genre() -> attach($genres);
        return redirect()->route('admin.books.index');
    }
}
