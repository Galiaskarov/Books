<?php

namespace App\Http\Controllers\Api\Personal\Books;

class DestroyController
{
    public function __invoke($id)
    {
        $book = auth()->user()->book->find($id);
        $book -> delete();
    }
}
