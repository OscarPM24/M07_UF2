<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<!-- Vista d'usuari administrador -->
<body>
    <h1>BENVINGUT/DA ADMIN</h1>
    <!-- Ruta centres -->
    <a href="{{ route('centres') }}">CENTRES</a>
    <!-- Ruta professorat -->
    <a href="{{ route('professorat') }}">PROFESSORAT</a>
    <!-- Ruta alumnat -->
    <a href="{{ route('alumnat') }}">ALUMNAT</a><br>
    <!-- Ruta tornada al signin -->
    <a href="{{ route('signin') }}">Log Out</a>
</body>
</html>