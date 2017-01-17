<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function index()
    {
        $this->smarty_properties['title'] = 'VuFinder-Your Point Of view';
        $this->smarty_properties['images'] = glob('./public/img/carusel/*.jpg');
        $this->my_smarty->display(APPPATH . 'views/contents/home.tpl', $this->smarty_properties);
    }
}