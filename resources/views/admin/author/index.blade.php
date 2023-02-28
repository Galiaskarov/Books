@extends('admin.layouts.main')

@section('content')
<h1 class="mt-3">Страница администратора author</h1>
<a href="{{route('admin.authors.create')}}" class="btn btn-outline-dark mt-3">Добавить автора</a>
<table class="table mt-2">
    <thead class="table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Авторы</th>
        <th scope="col">Действия</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td><a class="text-decoration-none" href="{{route('admin.authors.show',$user->id)}}">Посмотреть</a></td>
        <td><a class="text-decoration-none text-warning" href="{{route('admin.authors.edit',$user->id)}}">Изменить</a></td>
        <td>
            <form action="{{route('admin.authors.destroy',$user->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="border-0 p-0 bg-transparent text-danger">Удалить</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
