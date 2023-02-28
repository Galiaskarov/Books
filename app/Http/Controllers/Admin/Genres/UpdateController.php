<?php

namespace App\Http\Controllers\Admin\Genres;


use App\Http\Requests\Admin\Genres\UpdateRequest;
use App\Models\Genre;


class UpdateController
{
    public function __invoke(UpdateRequest $request,Genre $genre)
    {
        $data = $request->validated();
        $genre -> update($data);
        return redirect()->route('admin.genres.index');
    }
}
