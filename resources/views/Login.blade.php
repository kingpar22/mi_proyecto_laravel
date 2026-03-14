<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZaguNet - Login</title>
    @vite('resources/css/estilo_login.css')
</head>
<body>
    <div class="login-container">
        <h1>Login ZaguNet</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="admin@admin.com" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="********" required>

            <button type="submit">Ingresar</button>

            @if($errors->any())
                <p class="mensaje">{{ $errors->first() }}</p>
            @endif
        </form>
    </div>
</body>
</html>