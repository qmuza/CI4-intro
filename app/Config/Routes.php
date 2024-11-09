<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CController::index');
$routes->post('/addnote', 'CController::addnote');
$routes->post('/editnote', 'CController::editnote');
