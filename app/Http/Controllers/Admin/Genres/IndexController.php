<?php

namespace App\Http\Controllers\Admin\Genres;

use App\Models\Genre;

class IndexController
{
    public function __invoke()
    {
        $genres = Genre::all();
        return view('admin.genre.index',compact('genres'));
    }
}
