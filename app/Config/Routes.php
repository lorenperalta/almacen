<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Almacen', 'AlmacenController::index');
$routes->get('/Almacenes/(:any)', 'AlmacenController::alm/$1');
$routes->post('/Almacen/crear', 'AlmacenController::crear');
$routes->get('/Almacen/obtener/(:any)', 'AlmacenController::obtener/$1');
$routes->post('/Almacen/actualizar', 'AlmacenController::actualizar');
$routes->get('/Almacen/eliminar/(:any)', 'AlmacenController::eliminar/$1');



$routes->get('/Producto', 'ProductoController::index');
$routes->post('/Producto/crear', 'ProductoController::crear');
$routes->get('/Producto//(:any)', 'ProductoController::obtener/$1');
$routes->post('/Producto/actualizar', 'ProductoController::actualizar');
$routes->get('/Producto/eliminar/(:any)', 'ProductoController::eliminar/$1');

$routes->get('/Secciones/(:any)', 'SeccionesController::index/$1');
$routes->post('/Secciones/crear', 'SeccionesController::crear');
$routes->get('/Seccion/obtener/(:any)', 'SeccionesController::obtener/$1');
$routes->post('/Secciones/actualizar', 'SeccionesController::actualizar');
$routes->get('/Secciones/eliminar/(:any)', 'SeccionesController::eliminar/$1');

$routes->get('/Movimientos', 'MovimientosController::index');
$routes->post('/Movimientos/crear', 'MovimientosController::crear');
$routes->get('/Movimientos/obtener/(:any)', 'MovimientosController::obtener/$1');
$routes->post('/Movimientos/actualizar', 'MovimientosController::actualizar');
$routes->get('/Movimientos/eliminar/(:any)', 'MovimientosController::eliminar/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}