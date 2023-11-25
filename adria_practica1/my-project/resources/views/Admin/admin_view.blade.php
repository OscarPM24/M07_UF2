<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <style>
            body {
                font-family: Verdana;
            }
            h1 {
                text-decoration: underline;
            }
            li {
                list-style: none;
            }
            a {
                text-decoration: none;
                font-size: 20px;
            }
            a:hover {
                color: red;
            }
        </style>
    </head>
    <!-- Vista d'usuari administrador -->
    <body>
        <h1>BENVINGUT/DA ADMIN</h1>
        <ul>
            <!-- Ruta centres -->
            <li><a href="{{ route('centres') }}">CENTRES</a></li>
            <!-- Ruta professorat -->
            <li><a href="{{ route('professorat') }}">PROFESSORAT</a></li>
            <!-- Ruta alumnat -->
            <li><a href="{{ route('alumnat') }}">ALUMNAT</a><br></li>
        </ul>
        <!-- Ruta tornada al signin -->
        <a href="{{ route('signin') }}">Log Out</a>
    </body>
</html>