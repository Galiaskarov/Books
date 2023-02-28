<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Requests\Admin\Authors\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate($data);

        return redirect()->route('admin.authors.index');
    }
}
