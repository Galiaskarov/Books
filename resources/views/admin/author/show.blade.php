@extends('admin.layouts.main')

@section('content')
<h1 class="mt-3">User</h1>
<div class="container border p-4">
    <p>Имя: {{$user->name}}</p>
    <p>Электронная почта: {{$user->email}}</p>
    <p>
    Роль:
    @foreach($roles as $id => $role)
    {{$user->role === $id? $role:''}}
    @endforeach
    </p>
    <p>Количество книг у автора: {{$userBook}} книги</p>
    <div class="d-flex col-2 justify-content-between">
        <a href="{{route('admin.authors.edit',$user->id)}}" class="btn btn-outline-dark">Изменить</a>
        <form action="{{route('admin.authors.destroy',$user->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Удалить</button>
        </form>
    </div>
</div>
@endsection
