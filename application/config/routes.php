<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'HomeController';
$route['404_override'] = 'Error404';
$route['translate_uri_dashes'] = FALSE;

$route['relatorio'] = 'HomeController/relatorio';
$route['grafico']   = 'HomeController/grafico';
$route['pizza']     = 'HomeController/pizza';
$route['load-page'] = 'HomeController/loadPage';