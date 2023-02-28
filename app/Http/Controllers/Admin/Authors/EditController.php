<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Models\User;

class EditController
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();
        return view('admin.author.edit',compact('user','roles'));
    }
}
