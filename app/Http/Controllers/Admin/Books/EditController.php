<?php

namespace App\Http\Controllers\Admin\Books;

use App\Models\Book;
use App\Models\Genre;
use App\Models\User;


class EditController
{
    public function __invoke(Book $book)
    {
        $authors = User::all();
        $genres = Genre::all();
        $oldGenres = $book->genre;
        return view('admin.book.edit',compact('book','authors','genres','oldGenres'));
    }
}
