@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-3">Edit book</h1>
    <form action="{{route('admin.books.update',$book->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group mt-3">
            <label>Book title</label>
            <input type="text" class="form-control mt-1" value="{{$book->title}}" name="title">
        </div>
        <div class="form-group mt-3">
            <label>Author</label>
            <select class="form-control" name="user_id">
                @foreach($authors as $author)
                <option
                    {{$author->id === $book->user_id?'selected':''}}
                    value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-3">
            <label>Example multiple select</label>
            <select multiple class="form-control" name="genres[]">
                @foreach($genres as $genre)
                <option
                   @foreach($oldGenres as $oldGenre)
                       {{$genre->id === $oldGenre->id?'selected':''}}
                   @endforeach
                    value="{{$genre->id}}">{{$genre->title}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-outline-dark mt-3">Edit</button>
    </form>
@endsection
