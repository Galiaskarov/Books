@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-3">Книги</h1>
    <a href="{{route('admin.books.create')}}" class="btn btn-outline-dark mt-3">Добавить книгу</a>
    <table class="table mt-2">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Книги</th>
            <th scope="col">Действия</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td><a class="text-decoration-none" href="{{route('admin.books.show',$book->id)}}">Посмотреть</a></td>
                <td><a class="text-decoration-none text-warning" href="{{route('admin.books.edit',$book->id)}}">Изменить</a></td>
                <td>
                    <form action="{{route('admin.books.destroy',$book->id)}}" method="post">
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
