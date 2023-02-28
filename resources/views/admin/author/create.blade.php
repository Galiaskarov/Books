@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-3">Create user</h1>
    <form action="{{route('admin.authors.store')}}" method="post">
        @csrf
        <div class="form-group mt-3">
            <label>User name</label>
            <input type="text" class="form-control mt-1" placeholder="User name" name="name">
        </div>
        <div class="form-group mt-3">
            <label>User email</label>
            <input type="email" class="form-control mt-1" placeholder="User email" name="email">
        </div>
        <div class="form-group mt-3">
            <label >User role</label>
            <select class="form-control" name="role">
                @foreach($roles as $id => $role)
                <option value="{{$id}}">{{$role}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label>User password</label>
            <input type="text" class="form-control mt-1" placeholder="User password" name="password">
        </div>

        <button type="submit" class="btn btn-outline-dark mt-3">Create</button>
    </form>
@endsection
