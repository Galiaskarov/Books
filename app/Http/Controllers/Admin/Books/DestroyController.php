<?php

namespace App\Http\Controllers\Admin\Books;

use App\Models\Book;

class DestroyController
{
    public function __invoke(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index');
    }
}
