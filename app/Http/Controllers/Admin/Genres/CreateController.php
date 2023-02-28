<?php

namespace App\Http\Controllers\Admin\Genres;



class CreateController
{
    public function __invoke()
    {
        return view('admin.genre.create');
    }
}
