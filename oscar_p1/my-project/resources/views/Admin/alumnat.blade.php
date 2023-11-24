<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
</head>
<body>
    <table>
        <th>
        <td>ID</td><td>Name</td><td>Address</td><td>CP</td><td>City</td>
        </th>
        @foreach ($alumnat as $alumne)
            <tr>
                <td>{{ $alumne->id }}</td>
                <td>{{ $alumne->name }}</td>
                <td>{{ $alumne->surname }}</td>
                <td>{{ $alumne->rol }}</td>
                <td>{{ $alumne->email }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>