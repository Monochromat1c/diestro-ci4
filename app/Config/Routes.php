<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users/add','UserController::addUser');
$routes->get('/users/delete','UserController::deleteUser');
$routes->get('/users/edit','UserController::editUser');
$routes->get('/users/list','UserController::listUser');
$routes->get('/users/view','UserController::viewUser');