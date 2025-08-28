<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('estudiantes','EstudiantesController::index');
$routes->post('agregar_estudiante','EstudiantesController::agregarEstudiante');
$routes->get('buscar_estudiante/(:num)','EstudiantesController::buscarEstudiante/$1');

$routes->get('grados','GradosController::index');
$routes->get('buscar_grados/(:num)','GradosController::buscarGrados/$1');

// Rutas para la funcionalidad de actualizar
$routes->get('editar/(:num)','GradosController::editarGrado/$1');
$routes->post('actualizar', 'GradosController::actualizarGrado');

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
$routes->get('libros/editar/(:segment)', 'LibrosController::editarLibro/$1');
$routes->post('libros/actualizar', 'LibrosController::actualizarLibro');
$routes->get('libros/eliminar/(:segment)', 'LibrosController::eliminarLibro/$1');

// Ruta del Loginsito

$routes->post('login','EmpleadosController::index');