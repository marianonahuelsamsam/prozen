<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use Controllers\PaginasController;
use MVC\Router;

$router = new Router();


// Inicio de Sesión
$router->get("/login", [LoginController::class, "login"]);
$router->post("/login", [LoginController::class, "login"]);

// Home
$router->get("/home", [PaginasController::class, "home"]);

// Crear Kaizen
$router->get("/crear-kaizen", [PaginasController::class, "crearKaizen"]);
$router->post("/crear-kaizen", [PaginasController::class, "crearKaizen"]);

// Mis puntos
$router->get("/mis-puntos", [PaginasController::class, "misPuntos"]);

// Mis Kaizén
$router->get("/mis-kaizen", [PaginasController::class, "misKaizen"]);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();