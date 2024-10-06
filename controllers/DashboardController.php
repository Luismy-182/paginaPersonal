<?php 
namespace Controllers;
use MVC\Router;

class DashboardController{

    public static function index(Router $router){

    

    // Muestra la vista
    $router->render('dashboard/inicio', [
        'titulo' => 'Pagina personal'
    ]);


}


}





?>