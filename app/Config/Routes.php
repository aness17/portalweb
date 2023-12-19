<?php

use CodeIgniter\Router\RouteCollection;
use Config\App\Controllers\Users;

/**
 * @var RouteCollection $routes
 */
$routes->add('/', 'Auths::index');
$routes->add('/src', 'Auths::index');
$routes->add('regist', 'Auths::registration');
$routes->add('profile', 'Users::profile');
$routes->add('edit_profile', 'Users::edit_profile');
$routes->get('news/(:segment)', 'Auths::view/$1');
$routes->add('comment', 'Auths::addcomment');
$routes->add('reply_comment', 'Auths::c omment_reply');
$routes->add('delete_comment/(:segment)', 'Auths::delete_comment/$1');
$routes->add('like', 'Auths::like');

$routes->get('users', 'Users::index');
$routes->get('users/coba', 'Users::coba');
$routes->add('loginform', 'Auths::form_login');
$routes->add('login', 'Auths::login');
$routes->add('logout', 'Auths::logout');
$routes->get('admins', 'Admins::index');
$routes->get('admin/coba', 'Admin::coba');

// Users
$routes->get('datauser', 'Admins::datauser'); //direct to data user
$routes->get('form_adduser', 'Admins::form_adduser'); //direct to form add user
$routes->post('adduser', 'Admins::adduser'); //add data user
$routes->get('form_edituser/(:any)', 'Admins::form_edituser/$1'); //direct to form edit user
$routes->post('edituser/(:any)', 'Admins::edituser/$1'); //edit data user
$routes->get('deleteuser/(:any)', 'Admins::deleteuser/$1'); // delete data user

// Kategori
$routes->get('datakategori', 'Admins::datakategori'); //direct to data kategori
$routes->get('form_addkategori', 'Admins::form_addkategori'); //direct to form add kategori
$routes->post('addkategori', 'Admins::addkategori'); //add data kategori
$routes->add('editkategori/(:num)', 'Admins::editkategori/$1'); //edit data kategori
$routes->get('deletekategori/(:any)', 'Admins::deletekategori/$1'); // delete data kategori

// News
$routes->get('datanews', 'Admins::datanews'); //direct to data news
$routes->add('addnews', 'Admins::addnews'); //add data news
$routes->add('editnews/(:num)', 'Admins::editnews/$1'); //edit data news
$routes->get('deletenews/(:any)', 'Admins::deletenews/$1'); // delete data news
$routes->add('detailnews/(:any)', 'Admins::detailnews'); // detail news
$routes->post('detailnews', 'Admins::detailnews'); // detail news

// Comments
$routes->get('datacomment', 'Admins::datacomment'); //direct to data comment
$routes->add('addcomment', 'Admins::addcomment'); //add data comment
$routes->add('editcomment/(:num)', 'Admins::editcomment/$1'); //edit data comment
$routes->get('deletecomment/(:any)', 'Admins::deletecomment/$1'); // delete data comment
$routes->get('detailcomment/(:any)', 'Admins::detailcomment/$1'); // delete data comment

//Setting
$routes->add('setting', 'Admins::index');

//information
$routes->get('datainformasi', 'Admins::datainformasi'); //direct to data informasi
$routes->add('addinformasi', 'Admins::addinformasi'); //add data informasi
$routes->get('delete_info/(:any)', 'Admins::deleteinformasi/$1'); // delete data informasi
