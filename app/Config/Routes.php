<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\News;
use App\Controllers\Pages;

$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line


$routes->get('pages', [Pages::class, 'index']);
$routes->get('pages/(:segment)', [Pages::class, 'view']);
/* $routes->get('pages/(:segment)', [Pages::class, 'view']);  */
