<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Page404 extends MY_Controller{

        public function index(){
            $this->smarty_properties['title'] = 'Oppsyyy Error Page';
            $this->my_smarty->display(APPPATH.'views/contents/page404.tpl',$this->smarty_properties);
        }
    }
