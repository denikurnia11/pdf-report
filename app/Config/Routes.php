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

$routes->get('/list-form6', 'Home::list_form6');
$routes->get('/download-form6/(:num)', 'Home::downloadForm6/$1');
$routes->get('/form6', 'Home::form6');
$routes->post('/form6', 'Home::save_form6');

$routes->get('/list-form7', 'Home::list_form7');
$routes->get('/download-form7/(:num)', 'Home::downloadForm7/$1');
$routes->get('/form7', 'Home::form7');
$routes->post('/form7', 'Home::save_form7');

$routes->get('/list-form8', 'Home::list_form8');
$routes->get('/download-form8/(:num)', 'Home::downloadForm8/$1');
$routes->get('/form8', 'Home::form8');
$routes->post('/form8', 'Home::save_form8');

$routes->get('/list-form9', 'Home::list_form9');
$routes->get('/download-form9/(:num)', 'Home::downloadForm9/$1');
$routes->get('/form9', 'Home::form9');
$routes->post('/form9', 'Home::save_form9');
