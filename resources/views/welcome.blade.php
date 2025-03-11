<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Noticias - Taller Empresarial</title>

        <link rel="stylesheet" href="{{ asset('css/login_register_form.css') }}">
    </head>
    <body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Registro Lectores</h1>
                <input type="text" placeholder="Nombre" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Contraseña" />
                <button>Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Inicio de Sesión</h1>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Contraseña" />
                <a href="#">¿Has olvidado tu contraseña?</a>
                <button>Iniciar Sesión</button>
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
