<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Models\User;

class IndexController
{
    public function __invoke()
    {
        $users = User::all();
        return view('admin.author.index',compact('users'));
    }
}
