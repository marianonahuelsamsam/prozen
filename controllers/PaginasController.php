<?php

namespace Controllers;

use MVC\Router;

class PaginasController {

    public static function home(Router $router) {

        $router->render("paginas/home", [

        ]);
    }

    public static function crearKaizen(Router $router) {

        $router->render("paginas/crear-kaizen", [

        ]);

        
    }

    public static function misPuntos(Router $router) {
        $router->render("paginas/mis-puntos", [

        ]);

    }

    public static function misKaizen(Router $router) {
        $router->render("paginas/mis-kaizen", [

        ]);
    }
}
