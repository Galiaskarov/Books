<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Models\User;

class DestroyController
{
    public function __invoke(User $user)
    {
       $user->delete();
        return redirect()->route('admin.authors.index');
    }
}
