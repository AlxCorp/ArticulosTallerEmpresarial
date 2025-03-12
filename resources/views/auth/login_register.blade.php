<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Empresarial 2.0</title>
</head>
<body>
    <link rel="stylesheet" href="{{asset('css/login_register_form.css')}}">
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('register') }}" method="POST">
                <h1>Registro Lectores</h1>
                <input name="name" type="name" placeholder="Nombre" />
                <input name="email" type="email" placeholder="Email" />
                <input name="password" type="password" placeholder="Contraseña" />
                <button>Registrarse</button>
                @csrf
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('login') }}" method="POST">
                <h1>Inicio de Sesión</h1>
                <input name="email" type="email" placeholder="Email" />
                <input name="password" type="password" placeholder="Contraseña" />
                <a href="#">¿Has olvidado tu contraseña?</a>
                <button>Iniciar Sesión</button>
                @csrf
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>Inicia sesión para poder leer todos los artículos</p>
                    <button class="ghost" id="signIn">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Bienvenido, Lector!</h1>
                    <p>Comienza a leer los artículos más relevantes para tí</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/login_register_form.js')}}"></script>
</body>
</html>
