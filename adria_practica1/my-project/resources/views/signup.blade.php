<!-- View de 'sign up' amb plantilla Laravel -->
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input {
            margin:5px;
        }
        label, input, div, button, a {
            padding: 5px;
        }
        body, button, select, input, option {
            font-family: Verdana;
            font-weight: bold;
        }
        h1 {
            text-decoration: underline;
        }
        button, select, input, option {
          font-size: 15px;
        }
        button {
          margin: 10px;
        }          
        a {
            text-decoration: none;
            font-size: 20px;
        }
        a:hover {
            color: red;
        }
      </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creació d'usuari</title>
</head>
<body>
    <form  method="POST" action="../index.php">
        <!-- inserim textResult com a variable global la qual rebrà un valor segons la ruta -->
        <!-- Aquesta variable per defecte (/Adria/signup) val 'Crear un usuari' -->
        <!-- Aquesta variable amb parametres (/Adria/signup/param1/param2/param3) val els valors de casa slash(/) concatenats -->
        <h1>{{ $textResult }}</h1>
        <label>ID</label>
        <input type="text" name="id" required><br>
        <label>Rol</label>
        <select name="rol">
            <option value="alumnat">Alumnat</option>
            <option value="professorat">Professorat</option>
        </select><br>
        <label>Name</label>
        <input type="text" name="nom" required><br>
        <label>Surname</label>
        <input type="text" name="cognom" required><br>
        <label>Password</label>
        <input type="password" name="passwd" required><br>
        <label>Email</label>
        <input type="email" name="email" required><br>
        <label>Active</label>
        <input type="checkbox" name="actiu" required><br>
        <button type="submit" name="send" required>Send</button><br>
        <!-- <a> per redirigir a la view de signin -->
        <!-- Fem servir la instància url() per cridar el path Adria/signup -->
        <a href="{{ url('Adria/signin') }}">Iniciar sessió usuari</a><br>
    </form>
</body>
</html>