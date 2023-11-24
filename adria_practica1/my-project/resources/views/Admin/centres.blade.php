<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
</head>
<body>
    @foreach ($centres as $centre)
        <p> {{ $centre->name }} </p>
    @endforeach
</body>
</html>