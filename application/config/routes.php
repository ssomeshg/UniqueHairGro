<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Web
$route['about_us'] = 'Web/about_us';
$route['before_after'] = 'Web/before_after';
$route['blog'] = 'Web/blog';
$route['blog_view/(:any)'] = 'Web/blog_view/$1';
$route['contact'] = 'Web/contact';
$route['hair_transplant_cost'] = 'Web/hair_transplant_cost';
$route['hairtransplant'] = 'Web/hairtransplant';
$route['dandruff_treatment'] = 'Web/dandruff_treatment';
$route['prp_hair_loss_treatment'] = 'Web/prp_hair_loss_treatment';
$route['fue_hair_treatment'] = 'Web/fue_hair_treatment';
$route['beard_transplant'] = 'Web/beard_transplant';
$route['chemical_peels'] = 'Web/chemical_peels';
$route['female_hair_transplant'] = 'Web/female_hair_transplant';
$route['gfc_hair_treatment'] = 'Web/gfc_hair_treatment';
$route['skin_care_treatment'] = 'Web/skin_care_treatment';

$route['appointment_save'] = 'Web/appointment_save';
$route['contact_save'] = 'Web/contact_save';

// Nirvakam 

$route['nirvakam_create'] = 'Nirvakam/add_nirvakam';
$route['save_nirvakam'] = 'Nirvakam/save_nirvakam';
$route['nirvakam_list'] = 'Nirvakam/nirvakam_list';

$route['nirvakam'] = 'Nirvakam';
$route['admin_loginCheck'] = 'Nirvakam/loginCheck';
$route['Logout'] = 'Nirvakam/Logout';

$route['changepassword'] = 'Nirvakam/changepassword';
$route['save_changepassword'] = 'Nirvakam/save_changepassword';

$route['dashboard'] = 'Dashboard';

$route['appointment_list'] = 'Dashboard/appointment_list';
$route['contact_list'] = 'Dashboard/contact_list';

$route['before_after_create'] = 'Before_after';
$route['before_after_list'] = 'Before_after/before_after_list';
$route['before_after_save'] = 'Before_after/before_after_save';

$route['blog_create'] = 'Blog';
$route['blog_list'] = 'Blog/blog_list';
$route['blog_save'] = 'Blog/blog_save';

$route['banner_create'] = 'Banner';
$route['banner_list'] = 'Banner/banner_list';
$route['banner_save'] = 'Banner/banner_save';

$route['video'] = 'Banner/video';
$route['video_save'] = 'Banner/video_save';