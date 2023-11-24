<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
</head>
<body>
    <table>
        <th>
        <td>ID</td><td>Name</td><td>Address</td><td>CP</td><td>City</td>
        </th>
        @foreach ($centres as $centre)
            <tr>
                
                <td>{{ $centre->name }}</td>
                <td>{{ $centre->address }}</td>
                <td>{{ $centre->cp }}</td>
                <td>{{ $centre->city }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>