<!DOCTYPE html>
<html>
<head>
    <title>Actors List</title>
</head>
<body>
    @include('_navbar')
    <h1>Actors List</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Birth Date</th>
                <th>Nationality</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actors as $actor)
            <tr>
                <td>{{ $actor->name }}</td>
                <td>{{ $actor->birth_date }}</td>
                <td>{{ $actor->nationality }}</td>
                <td>
                    <form action="{{ route('actors.destroy', $actor->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
