<h1>Nuevo Kaizén</h1>

<main class="contenedor">

    <div class="boton-volver">
        <a href="/home" class="boton-azul">Volver</a>
    </div>
    
    <form action="/crear-kaizen" class="formulario" method="POST">

    <?php
    @include_once __DIR__ . "/../templates/formulario.php";
    ?>

    <input type="submit" value="Crear Kaizén" class="boton-azul">

    </form>
    
    

</main>
