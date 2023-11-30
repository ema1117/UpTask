<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
$router = new Router();

//ruta para el login
$router->get('/',[LoginController::class,'login']);
$router->post('/',[LoginController::class,'login']);
$router->get('/logout',[LoginController::class,'logout']);

//crear cuentas
$router->get('/crear',[LoginController::class,'crear']);
$router->post('/crear',[LoginController::class,'crear']);

//recuperar contraseña
$router->get('/recuperar',[LoginController::class,'recuperar']);
$router->post('/recuperar',[LoginController::class,'recuperar']);

//colocar el nuevo pass
$router->get('/reestablecer',[LoginController::class,'reestablecer']);
$router->post('/reestablecer',[LoginController::class,'reestablecer']);

//colocar confirmacion de cueta
$router->get('/mensaje',[LoginController::class,'mensaje']);
$router->get('/confirmar',[LoginController::class,'confirmar']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();