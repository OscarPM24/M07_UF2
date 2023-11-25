<!-- View de 'sign in' amb plantilla Laravel -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user</title>
    <style>
        input {
            margin:5px;
        }
        label, input, div, button, a {
            padding: 5px;
        }
        body, button, select, input {
            font-family: Verdana;
            font-weight: bold;
        }
        h1 {
            text-decoration: underline;
        }
        button, select, input {
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
</head>
<body>
    
    <form method="POST" action="{{ route('admin_view') }}">
    @csrf
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
        <button type="submit">Enviar</button><br>
        <!-- <a> per redirigir a la view de signup -->
        <!-- Fem servir la instància url() per cridar el path Adria/signin -->
        <a href="{{ route('signup') }}">Crear usuari</a><br>
        <!-- variable que en cas de fer signin amb user/pwd incorrectes -->
        <!-- ens mostrarà 'Login incorrecte' -->
        {{ $error }}
      </form>
</body>
</html>