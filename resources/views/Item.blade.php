<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        h1 {
            color: #3498db;
            text-align: center;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        thead {
            background-color: #eaf6ff;
        }

        th {
            color: #2980b9;
            font-weight: 600;
            text-align: left;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        tbody tr {
            border-bottom: 1px solid #f0f0f0;
        }

        tbody tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e2f0ff;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Items List</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>

            <tbody>
                @foreach($Items as $Item)
                <tr>
                    <td>{{ $Item->id }}</td>
                    <td>{{ $Item->name }}</td>
                    <td>{{ $Item->price }}</td>
                    <td>{{ $Item->stock }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>