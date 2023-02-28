<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Models\User;

class ShowController
{
    public function __invoke(User $user)
    {
        $userBook = count($user->book);
        $roles = User::getRoles();
        return view('admin.author.show',compact('user','roles','userBook'));
    }
}
