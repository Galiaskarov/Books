<?php

namespace App\Http\Controllers\Admin\Books;

use App\Models\Book;

class IndexController
{
    public function __invoke()
    {
        $books = Book::all();
        return view('admin.book.index',compact('books'));
    }
}
