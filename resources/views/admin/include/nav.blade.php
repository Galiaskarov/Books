<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <a class="navbar-brand" href="#">Админка</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.authors.index')}}">Авторы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.books.index')}}">Книги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.genres.index')}}">Жанры</a>
            </li>
            <li class="nav-item mt-2">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <input type="submit" class="border-0 p-0 m-0 bg-transparent text-danger" value="Выйти">
                </form>
            </li>
        </ul>
    </div>
</nav>


