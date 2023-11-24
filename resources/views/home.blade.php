@extends('layouts.app')

@section('content')
    @include('_navbar')
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Discover Your Favorite Movies and Actors</h1>
            <p class="lead">Explore a world of entertainment with our curated collection of movies and talented actors.</p>
            <hr class="my-4">
            <p>Immerse yourself in the magic of cinema. Whether you're a movie buff or a fan of remarkable performances, you're in for a treat!</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('movies.index') }}" role="button">Explore Movies</a>
                <a class="btn btn-success btn-lg" href="{{ route('actors.index') }}" role="button">Explore Actors</a>
            </p>
        </div>
    </div>
@endsection
