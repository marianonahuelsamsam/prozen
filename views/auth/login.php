<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    
<h1>Prozen</h1>


<main class="contenedor">

    <form class="formulario" action="/login">
    
        <div class="campo">
            <label for="usuario">Nombre de Usuario</label>
            <input type="text" id="usuario" placeholder="Tu nombre de usuario" name="usuario">
        </div>

        <div class="campo">
            <label for="contraseña">Contraseña</label>
            <input type="text" id="contraseña" placeholder="Tu contraseña" name="contraseña">
        </div>

        <input type="submit" class="boton-azul" value="Ingresar">

    </form>



</main>

</body>
</html>