<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Unitech_Clients';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// Clients
$route['clients'] = 'Unitech_Clients/index';
$route['clients-add-entry'] = 'Unitech_Clients/add';
$route['clients-view-entry/(:any)'] = 'Unitech_Clients/view/$1';
$route['clients-del-entry/(:any)'] = 'Unitech_Clients/delete/$1';
$route['clients-edit-entry/(:any)'] = 'Unitech_Clients/edit/$1';

//Inventory
$route['inventory'] = 'Unitech_Inventory/index';
