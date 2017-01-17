<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Search extends MY_Controller
    {

        public function __construct(){

            parent::__construct();
            $this->load->model('model_search');
        }

        public function index()
        {
            $this->smarty_properties['title'] = 'search Page';
            $this->my_smarty->display(APPPATH . 'views/contents/search.tpl', $this->smarty_properties);
        }

        public function items_search()
        {

            $key = $this->input->get('key',true);


            if($key){


                $products = $this->model_search->get_by_key($key);

                 echo json_encode($products);



            }
        }


    }









