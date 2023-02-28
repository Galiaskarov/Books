<?php

namespace App\Http\Controllers\Api\Personal\Books;

use App\Http\Requests\Api\Personal\Books\UpdateRequest;

class UpdateController
{
    public function __invoke(UpdateRequest $request,$id)
    {
        $data = $request->validated();
        $book = auth()->user()->book->find($id);
        $book ->update($data);
        return $book;
    }
}
