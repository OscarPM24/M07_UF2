<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <h1>{{ $title }}</h1>
    </div>
    <div>
        <form>
            <div>
                <label>Email</label><br>
                <input type="text" name="email" required>
            </div>
            <div>
                <label>Contrasenya</label><br>
                <input type="text" name="password" required>
            </div>
            <div>
                <label>Remember me</label>
                <input type="checkbox" name="remember">
            </div>
            <div>
                <input type="submit" value="Enviar" required>
            </div>
            <div>
                <a href="signup">Crea usuari</a>
            </div>
        </form>
    </div>
</body>
</html>