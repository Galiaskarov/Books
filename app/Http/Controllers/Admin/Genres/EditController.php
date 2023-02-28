<?php

namespace App\Http\Controllers\Admin\Genres;

use App\Models\Genre;
use App\Models\User;

class EditController
{
    public function __invoke(Genre $genre)
    {
        return view('admin.genre.edit',compact('genre'));
    }
}
