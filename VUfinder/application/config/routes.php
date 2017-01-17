<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    /* Products */
    $route['products'] = "products";
    $route['products/(:any)'] = "products/index/$1";

    /* cart */
    $route['cart/(:any)'] = "cart/$1";


    /* User */
    $route['user/(:any)'] = "user/$1";

    /* CMS */
    $route['cms/dashboard/edit_product/(:num)'] = "cms/dashboard/edit_product/$1";
    $route['cms/dashboard/create_product/(:num)'] = "cms/dashboard/create_product/$1";
    $route['cms/dashboard/edit_product|cms/dashboard/create_product|cms/dashboard/edit_product'] = "cms/dashboard/product_management";
    $route['cms/dashboard/category_management/(:any)'] = "cms/dashboard/category_management/$1";
    $route['cms/dashboard'] = "cms/dashboard";
    $route['cms/dashboard/(:any)'] = "cms/dashboard/$1";

    /*CMS  content*/
    $route['cms/content'] = "cms/content";
    $route['cms/content/(:any)'] = "cms/content/$1";

    /*CMS menu*/
    $route['cms/menu'] = "cms/menu";
    $route['cms/menu/(:any)'] = "cms/menu/$1";



    /* Any else will route to boot controller */

    $route['default_controller'] = "home";
    $route['404_override'] = 'page404';