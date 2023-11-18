<!-- View de 'sign in' amb plantilla Laravel -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user</title>
</head>
<body>
    <form method="POST" action="usuari.php">
      <!-- inserim textResult com a variable global la qual rebrà un valor segons la ruta -->
      <!-- Aquesta variable per defecte (/Adria/signin) val 'Iniciar sessió de l'usuari' -->
      <!-- Aquesta variable amb parametres (/Adria/signin/param1/param2/param3/param4) val els valors de casa slash(/) concatenats -->
        <h1>{{ $textResult }}</h1>
        <label for="inputEmail">Email</label>
        <input type="email" placeholder="Email" name="mail" required><br>
        <label for="inputPassword">Contrassenya</label>
        <input type="password" placeholder="Password" name="pwd" required>
        <div>
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button type="submit" name="env">Enviar</button><br>
        <!-- <a> per redirigir a la view de signup -->
        <!-- Fem servir la instància url() per cridar el path Adria/signin -->
        <a href="{{ url('Adria/signup') }}">Crear usuari</a><br>
      </form>
</body>
</html>