<!DOCTYPE html>
<html>
<head>
    <title>Create Movie</title>
</head>
<body>
    @include('_navbar')
    <h1>Create Movie</h1>

    <form method="post" action="{{ route('movies.store') }}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Genre:</label>
        <input type="text" name="genre" required><br>

        <label>Release Year:</label>
        <input type="number" name="release_year" required><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
