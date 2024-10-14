<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/','Index::index');
$routes->get('index','Index::index');
$routes->get('index/index','Index::index');
$routes->get('home','Index::index');

$routes->get('index/showdata','Index::showData');
$routes->get('index/showdata/(:alpha)/(:num)','Index::showData/$1/$2');

$routes->get('index/about', "Index::about");
$routes->get('index/pia', "Index::pia");
$routes->get('index/lance', "Index::lance");
$routes->get('index/laine', "Index::laine");
$routes->get('index/jm', "Index::jm");