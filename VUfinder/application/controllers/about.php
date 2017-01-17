<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller
{


    public function index()
    {

        $this->smarty_properties['title'] = 'About Page';
        $this->my_smarty->display(APPPATH . 'views/contents/about.tpl', $this->smarty_properties);
    }
}
