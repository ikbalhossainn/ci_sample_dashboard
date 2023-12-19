<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminHome::index', ['filter'=> 'authGuard', 'filter'=>'noAuth']);    
// $routes->get('/about', 'about::index');
// $routes->get('/contact', 'contact::index');
// $routes->get('/services', 'services::index');
$routes->get('products', 'ProductController::index');
$routes->get('create', 'ProductController::create');
$routes->post('store', 'ProductController::store');
$routes->get('products/delete/(:num)', 'ProductController::delete/$1');
$routes->get('products/edit/(:num)', 'ProductController::edit/$1');
$routes->post('products/update/(:num)', 'ProductController::update/$1');

// Signin, Signup
$routes->get('register', 'SignupController::index');
$routes->match(['get', 'post'],'register/store', 'SignupController::store');
$routes->get('signin', 'SigninController::index');
$routes->post('login', 'SigninController::login'); // routing korar por controller er kace giye function a bosate hobe

$routes->get('/signout','SigninController::logout');

// Category Routes
$routes->get('category','CategoryController::index');  // category list
$routes->get('category/create','CategoryController::create'); // category entry form
$routes->post('category/store','CategoryController::store'); // category save
$routes->get('category/edit/(:num)','CategoryController::edit/$1'); // category edit form
$routes->post('category/update/(:num)','CategoryController::update/$1'); // category update
$routes->get('category/delete/(:num)','CategoryController::delete/$1'); // category delete

// Frontend

$routes->get('productsall', 'frontend\ProductController::index');
$routes->post('product/(:num)', 'frontend\ProductController::show/$1');

$routes->get('registration', 'frontend\RegistrationController::registration');


// Editor Routes

$routes->get('/editor', 'EditorController::index', ['filter'=> 'noAuth']);