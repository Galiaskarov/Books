<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Models\User;

class CreateController
{
    public function __invoke()
    {
        $roles = User::getRoles();
        return view('admin.author.create',compact('roles'));
    }
}
