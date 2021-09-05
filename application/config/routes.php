<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['opportunities/update'] = 'opportunities/update';
$route['opportunities/create'] = 'opportunities/create';
$route['accounts/create'] = 'accounts/create';
$route['accounts/update'] = 'accounts/update';
$route['accounts'] = 'accounts/index';
$route['opportunities'] = 'opportunities/index';
$route['default_controller'] = 'pages/view';
$route['accounts/(:any)'] = 'accounts/view/$1';
$route['opportunities/(:any)'] = 'opportunities/view/$1';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
