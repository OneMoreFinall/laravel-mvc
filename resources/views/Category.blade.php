<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <h1>haloo</h1>

    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>

        @foreach($Categories as $Category)
        <tr>
            <td>{{ $Category->id }}</td>
            <td>{{ $Category->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>