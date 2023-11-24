<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>professorat</title>
</head>
<body>
    <table>
        <th>
        <td>ID</td><td>Name</td><td>Address</td><td>CP</td><td>City</td>
        </th>
        @foreach ($professorat as $professor)
            <tr>
                <td>{{ $professor->id }}</td>
                <td>{{ $professor->name }}</td>
                <td>{{ $professor->surname }}</td>
                <td>{{ $professor->rol }}</td>
                <td>{{ $professor->email }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>