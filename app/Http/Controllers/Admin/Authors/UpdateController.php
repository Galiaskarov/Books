<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Requests\Admin\Authors\UpdateRequest;
use App\Models\User;

class UpdateController
{
    public function __invoke(UpdateRequest $request,User $user)
    {
        $data = $request->validated();
        $user -> update($data);
        return redirect()->route('admin.authors.show',compact('user'));
    }
}
