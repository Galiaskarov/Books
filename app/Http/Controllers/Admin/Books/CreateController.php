<?php

namespace App\Http\Controllers\Admin\Books;




use App\Models\Genre;
use App\Models\User;

class CreateController
{
    public function __invoke()
    {
        $authors = User::all();
        $genres = Genre::all();
        return view('admin.book.create',compact('authors','genres'));
    }
}
