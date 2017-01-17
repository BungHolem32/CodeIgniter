<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ContactUs extends MY_Controller
{
    public $post = [];
    public $validation = ['basic' => 'trim|required|xss_clean|min_length|2'];

    public function __construct()
    {

        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_home');
    }


    public function index()
    {

        $this->post = $this->input->post(null, true);
        $this->form_validation->set_rules('name', 'Name', $this->validation['basic']);
        $this->form_validation->set_rules('email', 'Email', $this->validation['basic']);
        $this->form_validation->set_rules('phone', 'Phone', $this->validation['basic'] . '|is_numeric');
        $this->form_validation->set_rules('order', 'Order', $this->validation['basic']);
        $this->form_validation->set_rules('message', 'Massage', $this->validation['basic']);

        if ($this->form_validation->run() == false) {

            $this->smarty_properties['validation_error'] = validation_errors();
            $this->smarty_properties['title'] = __CLASS__;
            $this->my_smarty->display(APPPATH . 'views/contents/contactUs.tpl', $this->smarty_properties);
        } else {


            $add_user_message = $this->model_home->create_table('contact_us',$this->post,'message');
            $is_inserted = $this->model_home->send_email($this->post);
            if($add_user_message && $is_inserted){

                redirect();
            }


        }
    }
}