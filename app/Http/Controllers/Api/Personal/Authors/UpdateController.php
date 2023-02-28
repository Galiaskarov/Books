<?php

namespace App\Http\Controllers\Api\Personal\Authors;

use App\Http\Requests\Api\Personal\Authors\UpdateRequest;
use Illuminate\Support\Facades\Hash;

class UpdateController
{
    public function __invoke(UpdateRequest $request)
    {
        $data = $request->validated();
        $data['password']=Hash::make($data['password']);
        $user = auth()->user();
        $user->update($data);
        return $user;
    }
}
