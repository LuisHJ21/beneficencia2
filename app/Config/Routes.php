<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/historia', 'Historia::index');
$routes->get('/visionymision', 'Visionmision::index');
$routes->get('/directorio', 'Directorio::index');

$routes->get('/noticias', 'Noticias::index');
$routes->get('/noticias/detallenoticia/(:num)', 'Detallenoticia::index/$1');



$routes->get('/contacto', 'Contacto::index');
$routes->get('/contacto/enviarmensaje', 'Contacto::enviarmensaje');

$routes->get('/nichos', 'Nichos::index');
$routes->get('/serfin', 'Serfin::index');


$routes->get('admin','Login::index');

$routes->group('admin',function($routes)
{

	$routes->add('login','Login::index');
	$routes->add('login/login','Login::login');
	$routes->add('login/logout','Login::logout');
	//panel principal
	$routes->add('dashboard','Dashboard::index');
	$routes->add('noticias','Noticiasadmin::index');
	$routes->add('noticias/eliminadas','Noticiasadmin::eliminadas');
	$routes->add('noticias/eliminar','Noticiasadmin::eliminar');
	$routes->add('noticias/agregar','Noticiasadmin::agregar');
	$routes->add('noticias/restaurar','Noticiasadmin::restaurar');
	$routes->add('noticias/agregar/registrar','Noticiasadmin::registrar');
	$routes->add('noticias/anexar','Noticiasadmin::anexar');



	$routes->add('nosotros','Nosotrosadmin::historia');
	$routes->add('nosotros/historia','Nosotrosadmin::historia');
	$routes->add('nosotros/historia/guardar','Nosotrosadmin::guardarhistoria');
	$routes->add('nosotros/historia/subirimagen','Nosotrosadmin::subirimagenhistoria');

	$routes->add('nosotros/mision','Nosotrosadmin::mision');
	$routes->add('nosotros/mision/guardar','Nosotrosadmin::guardarmision');

	$routes->add('nosotros/vision','Nosotrosadmin::vision');
	$routes->add('nosotros/vision/guardar','Nosotrosadmin::guardarvision');

	$routes->add('nosotros/contacto/guardar','Nosotrosadmin::guardarcontacto');


	$routes->add('directorio','Directorioadmin::index');
	$routes->add('directorio/agregar','Directorioadmin::agregar');
	$routes->add('directorio/agregar/registrar','Directorioadmin::registrar');
	$routes->add('directorio/eliminar','Directorioadmin::eliminar');
	$routes->add('directorio/restaurar','Directorioadmin::restaurar');
	$routes->add('directorio/actualizar','Directorioadmin::actualizar');
	$routes->add('directorio/eliminados','Directorioadmin::eliminados');
	$routes->add('directorio/agregar/subirimagen','Directorioadmin::subirimagen');

	$routes->add('slides','Slidesadmin::index');
	$routes->add('slides/agregar','Slidesadmin::subirimagen');
	$routes->add('slides/eliminar','Slidesadmin::eliminarimagen');
	$routes->add('slides/actualizarcontenido','Slidesadmin::actualizarcontenido');

	$routes->add('contacto','Contactoadmin::index');

	$routes->add('mensajes','Mensajesadmin::index');
	$routes->add('mensajes/detalle/(:num)','Mensajesadmin::detalle/$1');

	$routes->add('serfin','Serfinadmin::index');
	$routes->add('serfin/guardarservicio','Serfinadmin::guardarservicio');
	$routes->add('serfin/guardarmensualidad','Serfinadmin::guardarmensualidad');
	$routes->add('serfin/guardarrequisitos','Serfinadmin::guardarrequisitos');
	$routes->add('serfin/subirimagen','Serfinadmin::subirimagen');

	$routes->add('serfin/galeria','Galeriaadmin::index');
	$routes->add('serfin/galeria/agregar','Galeriaadmin::subirimagen');
	$routes->add('serfin/galeria/eliminar','Galeriaadmin::eliminarimagen');

	$routes->add('nichos','Nichosadmin::index');
	$routes->add('nichos/agregar','Nichosadmin::agregar');
	$routes->add('nichos/editarprecio','Nichosadmin::editarprecio');
	$routes->add('nichos/subirimagen','Nichosadmin::subirimagen');


	$routes->add('usuarios','Usuariosadmin::index');
	$routes->add('usuarios/actualizar','Usuariosadmin::actualizar');
	$routes->add('usuarios/restaurar','Usuariosadmin::restaurar');
	$routes->add('usuarios/eliminar','Usuariosadmin::eliminar');
	$routes->add('usuarios/eliminados','Usuariosadmin::eliminados');
	$routes->add('usuarios/agregar','Usuariosadmin::agregar');
	$routes->add('usuarios/agregar/registrar','Usuariosadmin::registrar');
	$routes->add('usuarios/agregar/validarusuario/(:alphanum)','Usuariosadmin::validarusuario/$1');

});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
