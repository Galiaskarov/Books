<?php

namespace App\Http\Controllers\Admin\Books;

use App\Models\Book;
use App\Models\User;

class ShowController
{
    public function __invoke(Book $book)
    {
        $genres = $book->genre;
        $authors = User::all();
        return view('admin.book.show',compact('book','genres','authors'));
    }
}
