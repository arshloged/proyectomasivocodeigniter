<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('estudiantes','EstudiantesController::index');
$routes->post('agregar_estudiante','EstudiantesController::agregarEstudiante');
$routes->get('buscar_estudiante/(:num)','EstudiantesController::buscarEstudiante/$1');
$routes->get('estudiantes/eliminar/(:segment)', 'EstudiantesController::eliminarEstudiante/$1');
$routes->post('editazionbonita','EstudiantesController::editarEstudiante/$1');

$routes->get('grados','GradosController::index');
$routes->get('buscar_grados/(:num)','GradosController::buscarGrados/$1');
$routes->get('grados/eliminar/(:segment)', 'GradosController::eliminarGrado/$1');
$routes->post('agregar_grado', 'GradosController::agregarGrado');



$routes->get('editar/(:num)','GradosController::editarGrado/$1');
$routes->post('grados_actualizar/(:num)', 'GradosController::actualizarGrado/$1');


// Rutas para la gestión de Préstamos
$routes->get('prestamos', 'PrestamosController::index');
$routes->get('prestamos/anadir', 'PrestamosController::anadirPrestamo');
$routes->post('prestamos/guardar', 'PrestamosController::guardarPrestamo');
$routes->get('prestamos/editar/(:segment)', 'PrestamosController::editarPrestamo/$1');
$routes->post('prestamos/actualizar', 'PrestamosController::actualizarPrestamo');
$routes->get('prestamos/eliminar/(:segment)', 'PrestamosController::eliminarPrestamo/$1');

// Rutas para la gestión de Libros
$routes->get('libros', 'LibrosController::index');
$routes->get('libros/anadir', 'LibrosController::anadirLibro');
$routes->post('libros/guardar', 'LibrosController::guardarLibro');
$routes->get('libros/editar_libro/(:segment)', 'LibrosController::editarLibro/$1');
$routes->post('libros/actualizar', 'LibrosController::actualizarLibro/$1');
$routes->get('libros/eliminar/(:segment)', 'LibrosController::eliminarLibro/$1');

// Ruta del Loginsito

$routes->post('login','EmpleadosController::index');

$routes->get('empleados/listar', 'EmpleadosController::listar'); 
$routes->get('empleados/crear', 'EmpleadosController::crear'); 
$routes->post('empleados/guardar', 'EmpleadosController::guardar'); 
$routes->get('empleados/editar/(:num)', 'EmpleadosController::editar/$1'); 
$routes->post('empleados/actualizar/(:num)', 'EmpleadosController::actualizar/$1'); 
$routes->get('empleados/eliminar/(:num)', 'EmpleadosController::eliminar/$1');

//mas rutas, ya  noooooooo

$routes->get('autores/listar', 'AutoresController::listar');
$routes->get('autores/crear', 'AutoresController::crear');
$routes->post('autores/guardar', 'AutoresController::guardar');
$routes->get('autores/editar/(:num)', 'AutoresController::editar/$1');
$routes->post('autores/actualizar/(:num)', 'AutoresController::actualizar/$1');
$routes->get('autores/eliminar/(:num)', 'AutoresController::eliminar/$1');


//ya no maaaaaaaaaaaaas

$routes->get('editoriales/listar', 'EditorialesController::listar');
$routes->get('editoriales/crear', 'EditorialesController::crear');
$routes->post('editoriales/guardar', 'EditorialesController::guardar');
$routes->get('editoriales/editar/(:num)', 'EditorialesController::editar/$1');
$routes->post('editoriales/actualizar/(:num)', 'EditorialesController::actualizar/$1');
$routes->get('editoriales/eliminar/(:num)', 'EditorialesController::eliminar/$1');

