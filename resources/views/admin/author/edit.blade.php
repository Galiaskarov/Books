@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-3">Edit user</h1>
    <form action="{{route('admin.authors.update',$user->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group mt-3">
            <label>User name</label>
            <input type="text" class="form-control mt-1" value="{{$user->name}}" name="name">
        </div>
        <div class="form-group mt-3">
            <label>User email</label>
            <input type="email" class="form-control mt-1" value="{{$user->email}}" name="email">
        </div>
        <div class="form-group mt-3">
            <label >User role</label>
            <select class="form-control" name="role">
                @foreach($roles as $id => $role)
                <option
                    {{$id === $user->role?'selected':''}}
                    value="{{$id}}">{{$role}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-dark mt-3">Edit</button>
    </form>
@endsection
