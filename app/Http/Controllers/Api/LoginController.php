<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $data = $request->validated();

        if(!Auth::attempt($data)){
            return response()->json('credentials not match',401);
        }

        $user = $request->user();

        $token = $user->createToken('api')->plainTextToken;

        return response()->json(['token'=>$token]);

    }
}
