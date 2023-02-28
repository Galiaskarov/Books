@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-3">Create genre</h1>
    <form action="{{route('admin.genres.update',$genre->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group mt-3">
            <label>Genre title</label>
            <input type="text" class="form-control mt-1" value="{{$genre->title}}" name="title">
        </div>
        <button type="submit" class="btn btn-outline-dark mt-3">Create</button>
    </form>
@endsection
