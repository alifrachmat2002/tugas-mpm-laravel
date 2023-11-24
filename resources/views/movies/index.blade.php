@extends('layouts.app')

@section('content')
    @include('_navbar')
    <div class="container mt-5">
        <h1 class="mb-4">Movies List</h1>
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $movie->image_url }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">Genre: {{ $movie->genre }}</p>
                            <p class="card-text">Release Year: {{ $movie->release_year }}</p>
                            <p class="card-text"><strong>Actors:</strong></p>
                            <ul>
                                @foreach ($movie->actors as $actor)
                                    <li>{{ $actor->name }}</li>
                                @endforeach
                            </ul>
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
