<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// admin
$routes->get('admin', 'Admin::index');
$routes->get('admin/perawat', 'Admin::adminPerawat');
$routes->get('admin/lansia', 'Admin::adminLansia');
$routes->get('admin/lansia/detail-lansia', 'Admin::detailLansia');
// end admin

$routes->get('/lansia', 'Lansia::index');
$routes->get('/perawat', 'Perawat::index');
