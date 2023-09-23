<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/list-form2', 'Home::list_form2');
$routes->get('/download-form2/(:num)', 'Home::downloadForm2/$1');
$routes->get('/form2', 'Home::form2');
$routes->post('/form2', 'Home::save_form2');

$routes->get('/list-form3', 'Home::list_form3');
$routes->get('/download-form3/(:num)', 'Home::downloadForm3/$1');
$routes->get('/form3', 'Home::form3');
$routes->post('/form3', 'Home::save_form3');

$routes->get('/list-form4', 'Home::list_form4');
$routes->get('/download-form4/(:num)', 'Home::downloadForm4/$1');
$routes->get('/form4', 'Home::form4');
$routes->post('/form4', 'Home::save_form4');
