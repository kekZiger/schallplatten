<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Admin;

$routes->get('/', 'Pages::index');

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);



$routes->get('pages', [Pages::class, 'index']);
$routes->get('pages/(:segment)', [Pages::class, 'view']);

$routes->presenter('admin', [
    'controller' => 'Admin',
    'filter' => 'group:superadmin',
]);


service('auth')->routes($routes);


/* $routes->get('pages/(:segment)', [Pages::class, 'view']);  */
