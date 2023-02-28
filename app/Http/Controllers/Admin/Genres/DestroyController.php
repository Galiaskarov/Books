<?php

namespace App\Http\Controllers\Admin\Genres;

use App\Models\Genre;

class DestroyController
{
    public function __invoke(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('admin.genres.index');
    }
}
