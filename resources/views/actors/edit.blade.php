<!DOCTYPE html>
<html>
<head>
    <title>Edit Actor</title>
</head>
<body>
    @include('_navbar')
    <h1>Edit Actor</h1>

    <form method="post" action="{{ route('actors.update', $actor->id) }}">
        @csrf
        @method('PUT')
        <!-- Include form fields for editing -->
        <label>Name:</label>
        <input type="text" name="name" value="{{ $actor->name }}" required><br>

        <label>Birth Date:</label>
        <input type="date" name="birth_date" value="{{ $actor->birth_date }}" required><br>

        <label>Nationality:</label>
        <input type="text" name="nationality" value="{{ $actor->nationality }}" required><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>
