<!DOCTYPE html>
<html>
<head>
    <title>Edit Movie</title>
</head>
<body>
    @include('_navbar')
    <h1>Edit Movie</h1>

    <form method="post" action="{{ route('movies.update', $movie->id) }}">
        @csrf
        @method('PUT')
        <!-- Include form fields for editing -->
        <label>Title:</label>
        <input type="text" name="title" value="{{ $movie->title }}" required><br>

        <label>Genre:</label>
        <input type="text" name="genre" value="{{ $movie->genre }}" required><br>

        <label>Release Year:</label>
        <input type="number" name="release_year" value="{{ $movie->release_year }}" required><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>
