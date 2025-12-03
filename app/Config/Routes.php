<?php

use CodeIgniter\Router\RouteCollection;
use Config\Services;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes(); // <-- inicializa la colección de rutas

$routes->get('/', 'Home::index');
$routes->get('/new_view', 'Home::newView');
$routes->get('/sacara', 'Sacara::index');

$routes->get('productos', 'Producto::index');
$routes->get('productos/create', 'Producto::create');
$routes->post('productos/store', 'Producto::store');

// RUTAS DEL FORMULARIO (minúsculas y coherentes con vistas y enlaces)
$routes->get('formulario', 'FormularioController::index');
$routes->post('formulario/login', 'FormularioController::login');
$routes->get('tablero', 'FormularioController::tablero');
$routes->get('formulario/logout', 'FormularioController::logout');

$routes->get('login', 'LoginController::index');
$routes->post('login/autenticar', 'LoginController::authenticate');
$routes->get('dashboard', 'dashboardController::index');
$routes->get('login/logout', 'LoginController::cerrar_sesion');