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
            <td>Price</td>
            <td>Stock</td>
        </tr>

        @foreach($Items as $Item)
        <tr>
            <td>{{ $Item->id }}</td>
            <td>{{ $Item->name }}</td>
            <td>{{ $Item->price }}</td>
            <td>{{ $Item->stock }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>