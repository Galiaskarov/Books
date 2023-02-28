@extends('admin.layouts.main')

@section('content')
<h1 class="mt-3">User</h1>
<div class="container border p-4">
    <p>Название книги: {{$book->title}}</p>

    <p>Автор:
    @foreach($authors as $author)
    {{$author->id === $book->user_id?$author->name:''}}
    @endforeach
    </p>
    <p>
    Жанры:
    @foreach($genres as $genre)
        {{$genre->title}}
    @endforeach
    </p>
    <div class="d-flex col-2 justify-content-between">
        <a href="{{route('admin.books.edit',$book->id)}}" class="btn btn-outline-dark">Изменить</a>
        <form action="{{route('admin.books.destroy',$book->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Удалить</button>
        </form>
    </div>
</div>
@endsection
