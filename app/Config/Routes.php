<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//home
$routes->get('/inicio', 'ControladorLibros::inicio');

$routes->get('/relaciones', 'controladorRelaciones::relaciones');
//api
$routes->get('/api', 'controladorSesiones::api');
//api usuarios
$routes->get('/apiUsuarios', 'controladorSesiones::apiUsuarios');


//sesion
$routes->get('/usuarios', 'controladorSesiones::usuarios');
$routes->get('/login', 'controladorSesiones::sesion');
$routes->post('/iniciarSesion', 'controladorSesiones::iniciarSesion');
$routes->get('/cerrarSesion', 'controladorSesiones::cerrarSesion');
$routes->post('/validarUsuario', 'controladorSesiones::validarUsuario');
$routes->post('/login2', 'Home::login2');

//libros
$routes->get('/ListarLibros', 'ControladorLibros::ListarLibros');
$routes->get('/CrearLibros', 'ControladorLibros::CrearLibros');
$routes->post('/ingresar', 'ControladorLibros::ingresar');
$routes->get('/obtenerNombre/(:any)', 'ControladorLibros::obtenerNombre/$1');
$routes->get('/eliminar/(:any)', 'ControladorLibros::eliminar/$1');
$routes->post('/actualizar', 'ControladorLibros::actualizar');

//estudiantes
$routes->get('/listarEstudiante', 'ControladorEstudiantes::listarEstudiante');
$routes->get('/CrearEstudiante', 'ControladorEstudiantes::CrearEstudiante');
$routes->post('/ingresarEst', 'ControladorEstudiantes::ingresarEst');
$routes->get('/obtenerNombreEst/(:any)', 'ControladorEstudiantes::obtenerNombreEst/$1');
$routes->get('/eliminarEst/(:any)', 'ControladorEstudiantes::eliminarEst/$1');
$routes->post('/actualizarEst', 'ControladorEstudiantes::actualizarEst');


$route['profiler']="Profiler_controller";
$route['profiler/disable']="Profiler_controller/disable";
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
