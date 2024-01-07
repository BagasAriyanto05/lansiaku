<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// >>> Akses Admin <<< //
$routes->get('admin', 'Admin::index');

// Perawat
$routes->get('admin/perawat', 'Admin::adminPerawat');
$routes->post('admin/perawat/add', 'Admin::addAdminPerawat');
$routes->post('admin/perawat/edit/(:any)', 'Admin::updateAdminPerawat/$1');
$routes->post('admin/perawat/delete/(:any)', 'Admin::deleteAdminPerawat/$1');
// Perawat


// Lansia
$routes->get('admin/lansia', 'Admin::adminLansia');
$routes->post('admin/lansia', 'Admin::addAdminLansia');
$routes->post('admin/lansia/(:num)', 'Admin::updateAdminLansia/$1');
$routes->post('admin/lansia/delete/(:num)', 'Admin::deleteAdminLansia/$1');
// Lansia

// Detail Lansia
$routes->get('admin/lansia/detail-lansia/(:num)', 'Admin::detailLansia/$1');
$routes->post('admin/lansia/detail-lansia/update/(:num)', 'Admin::updateDetailLansia/$1');
$routes->post('admin/lansia/detail-lansia/edit/(:any)', 'Admin::editKegiatanLansia/$1');
$routes->post('admin/lansia/detail-lansia/add', 'Admin::addKegiatanLansia');
$routes->post('admin/lansia/detail-lansia/delete/(:any)/(:num)', 'Admin::deleteDetailLansia/$1/$2');
// Detail Lansia
// end admin



// >>>Akses Perawat Hanya Menu Lansia<<< //
// Lansia

$routes->get('/perawat', 'Perawat::perawatLansia');
$routes->post('/perawat', 'Perawat::addPerawatLansia');
$routes->post('/perawat/(:num)', 'Perawat::updatePerawatLansia/$1');
$routes->post('/perawat/delete/(:num)', 'Perawat::deletePerawatLansia/$1');

// Lansia

// Detail Lansia
$routes->get('perawat/detail-lansia/(:num)', 'Perawat::detailLansia/$1');
$routes->post('perawat/detail-lansia/update/(:num)', 'Perawat::updateDetailLansia/$1');
$routes->post('perawat/detail-lansia/edit/(:any)', 'Perawat::editKegiatanLansia/$1');
$routes->post('perawat/detail-lansia/add', 'Perawat::addKegiatanLansia');
$routes->post('perawat/detail-lansia/delete/(:any)/(:num)', 'Perawat::deleteDetailLansia/$1/$2');
// Detail Lansia

// >>> End Akses Perawat Hanya Menu Lansia<<< //






// >>>Akses Anggota Lansia Hanya Menu Detail Lansia<<< //
$routes->get('lansia/(:num)', 'Lansia::detailLansia/$1');
$routes->post('lansia/update/(:num)', 'Lansia::updateDetailLansia/$1');
