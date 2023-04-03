<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prozen</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="build/css/app.css">
    
</head>
<body>

    <header class="header">

        <div class="header-contenedor">
            <h1 class="header-logo"><a href="/home">Prozen</a></h1>

            <button class="abrir-menu" id="abrir"> <i class="bi bi-list"></i> </button>

            <nav class="header-navegacion" id="navegacion">
                <button class="cerrar-menu" id="cerrar"> <i class="bi bi-x"></i> </button>
                <div class="nav-list">
                    <a href="/crear-kaizen">Nuevo</a>
                    <a href="/mis-puntos">Puntos</a>
                    <a href="/mis-kaizen">Mis Kaizén</a>
                    <a href="/logout">Cerrar Sesión</a>
                </div>
            </nav>
        </div>

    </header>

    <?php echo $contenido; ?>
            
    <script src="build/js/app.js"></script>

    <footer class="footer">

        <div class="datos">
            <p>Gruppo Proma</p>
            <p>Telefono: 351893254</p>
            <p>Email: promassa@outlook.com</p>
        </div>    

        <div class="nav-list-footer">
            <a href="/crear-kaizen">Nuevo</a>
            <a href="/mis-puntos">Puntos</a>
            <a href="/mis-kaizen">Mis Kaizén</a>
            <a href="/logout">Cerrar Sesión</a>
        </div>

    </footer>

</body>
</html>