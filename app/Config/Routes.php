<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/hello', 'HelloWorld::hallodunia');
$routes->get('/form', 'Mahasiswa::form');
$routes->post('/submit', 'Mahasiswa::submit');
$routes->get('/latihanview', 'HelloWorld::index');

$routes->get('/holilur', 'Kholilur::index');

$routes->get('/profile', 'Home::profile');
$routes->get('/skill', 'Home::skill');