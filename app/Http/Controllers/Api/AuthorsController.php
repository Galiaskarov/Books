<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\AuthorsResource;
use App\Models\User;

class AuthorsController extends Controller
{

    public function index()
    {
       return AuthorsResource::collection(User::paginate(5));
    }

    public function show($id)
    {
       return new AuthorResource(User::find($id));
    }

}
