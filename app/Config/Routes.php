<?php

$routes->get('/', 'Auth::index');
$routes->post('auth/login', 'Auth::login');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('logout', 'Auth::logout');
