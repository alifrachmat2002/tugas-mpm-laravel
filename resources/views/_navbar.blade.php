<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Laravel CRUD App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('movies.index') }}">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('actors.index') }}">Actors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('movies.create') }}">Add Movie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actors/create">Add Actor</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
