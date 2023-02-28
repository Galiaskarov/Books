<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Http\Resources\BooksResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {

        return BooksResource::collection(Book::paginate(5));
    }


    public function show($id)
    {
       return new BookResource(Book::findOrFail($id));
    }

}
