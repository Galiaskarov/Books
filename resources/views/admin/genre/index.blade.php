@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-3">Жанры</h1>
    <a href="{{route('admin.genres.create')}}" class="btn btn-outline-dark mt-3">Добавить жанр</a>
    <table class="table mt-2">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Жанры</th>
            <th scope="col">Действия</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($genres as $genre)
            <tr>
                <th scope="row">{{$genre->id}}</th>
                <td>{{$genre->title}}</td>
                <td><a class="text-decoration-none text-warning" href="{{route('admin.genres.edit',$genre->id)}}">Изменить</a></td>
                <td>
                    <form action="{{route('admin.genres.destroy',$genre->id)}}" method="post">
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

