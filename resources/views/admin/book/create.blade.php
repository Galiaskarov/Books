@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-3">Create user</h1>
    <form action="{{route('admin.books.store')}}" method="post">
        @csrf
        <div class="form-group mt-3">
            <label>Book title</label>
            <input type="text" class="form-control mt-1" placeholder="Book title" name="title">
        </div>
        <div class="form-group mt-3">
            <label>Book author</label>
            <select class="form-control" name="user_id">
                @foreach($authors as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach()
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Book genre</label>
            <select multiple class="form-control" name="genres[]">
                @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->title}}</option>
                @endforeach()
            </select>
        </div>


        <button type="submit" class="btn btn-outline-dark mt-3">Create</button>
    </form>
@endsection
