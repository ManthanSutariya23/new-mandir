<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'authorize/welcome';
$route['404_override'] = 'authorize/';
$route['translate_uri_dashes'] = FALSE;


// ----------- user route -----------

$route['home'] = 'authorize/index';

$route['vachanamrut'] = 'authorize/vachanamrut';

$route['about'] = 'authorize/about';

$route['contact'] = 'authorize/contact';


