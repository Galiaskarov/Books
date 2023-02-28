<?php

namespace App\Http\Controllers\Admin\Genres;

use App\Models\User;

class ShowController
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();
        return view('admin.author.show',compact('user','roles'));
    }
}
