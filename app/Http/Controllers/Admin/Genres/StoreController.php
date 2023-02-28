<?php

namespace App\Http\Controllers\Admin\Genres;


use App\Http\Requests\Admin\Genres\StoreRequest;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Genre::firstOrCreate($data);
        return redirect()->route('admin.genres.index');
    }
}
