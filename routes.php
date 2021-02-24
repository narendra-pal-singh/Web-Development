<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//$route['products/([a-z]+)/(\d+)'] = '$1/id_$2';
//$route['photos'] = 'image/index';

$route['photo/(:any)/(:num)'] = 'image/view/$1/$2';		//Display Single Photo URL
$route['photo/upload'] = 'image/upload';				//Upload Photo URL
$route['photo/edit/(:any)/(:num)'] = 'image/edit/$1/$2';//Edit Photo

$route['photos'] = 'image/index';			//Photos?s=abc, Photos?tag=abc


//$route['photo/(:any)/(:num)']['DELETE'] = 'image/delete/$1';

//Redirect to New URL from Old URL
$route['image/(:any)'] = 'image/redirect';

$route['user/email-changed'] = 'user/email_changed';   //Changing Email

//Admin Routes
$route['admin'] = 'admin/dashboard';
$route['admin/photo/edit/(:num)'] = 'admin/photo_edit/$1';

/*$route['adm/home'] = 'administrator/home';
$route['adm/index'] = 'administrator/view';
$route['adm/forget-password'] = 'administrator/forget_password';*/