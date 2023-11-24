<!DOCTYPE html>
<html>
<head>
    <title>Create Actor</title>
</head>
<body>

    @include('_navbar')
    <h1>Create Actor</h1>

    <form method="post" action="{{ route('actors.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Birth Date:</label>
        <input type="date" name="birth_date" required><br>

        <label>Nationality:</label>
        <input type="text" name="nationality" required><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
