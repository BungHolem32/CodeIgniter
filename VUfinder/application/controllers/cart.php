<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MY_Controller
{

    //create overide construct that load the construct of CI_ and autoload the model _cart
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_cart');
    }

    //add to cart method that get it information from ajax Jquery
    public function add_to_cart()
    {

        //put in variable $id the  query string with get method, and clean xss
        $id = $this->input->get('id', true);

        //enter if theres a value
        if ($id) {

            //put in variable the result of the model cart method get_product by id
            $product = $this->model_cart->get_product_by_id($id);

            //enter if there a result
            if ($product) {

                //put in variable the result of the model cart method add to cart
                $product_added = $this->model_cart->add_to_cart($product);
                //enter if there a result

            }
        }
    }

    //checkout page
    public function checkout()
    {
        if(!$this->data['is_login'])redirect('user/login');
        if($this->session->userdata('inputs')){redirect('cart/order');}


        $this->smarty_properties['cart'] = $this->cart;
        $this->my_smarty->display(APPPATH . 'views/contents/cart/checkout.tpl', $this->smarty_properties);
    }

    //update the total number of the items in the cart
    public function update_Cart()
    {

        //put in variable the id query string that updated in the query-string at the url
        $cart_details = $this->input->post(null, true);

        if ($cart_details) {

            //update the cart with the new information with ajax
            $this->cart->update($cart_details);
            //redirect to the checkout with the new count
            redirect(site_url() . 'cart/checkout/');
        }

        return $cart_details;
    }


    //method that handle with the user orders
    public function order()
    {
        //enter to this method if the user is login
        if (!$this->data['is_login']) redirect();

        //variable that get the content of the cart
        $order = $this->cart->contents();

        //if the submit button pressed and there is order
        if($order){
            if (isset($_POST['submit'])) {
                $name = $this->session->userdata('inputs');
                $send_mail = $this->model_cart->send_mail($name,$this->session->userdata('email'),$order);
                $sent = $this->model_cart->send_order(json_encode($order));

                if ($sent) {
                    $this->smarty_properties['user_info'] = $name;
                    redirect();
                }
            }
        }
        else{
            redirect('/products');
        }

        $this->smarty_properties['title'] = 'Order Page';
        $this->smarty_properties['order'] = $order;
        $this->smarty_properties['address_n_payment'] = $this->session->userdata('inputs');
        $this->smarty_properties['totalSum'] = $this->cart->total();
        $this->my_smarty->display(APPPATH . 'views/contents/cart/order.tpl', $this->smarty_properties);
    }

    public function payment_N_shipping(){

        //enter to this method if the user is login
        if (!$this->data['is_login']) {

            redirect();
        }

        $this->post = $this->input->post(null,true);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('fullname','Full Name','trim|required|min_length[2]|max_length[12]|xss_clean' );
        $this->form_validation->set_rules('street','Street Adress ','trim|required|min_length[2]|max_length[24]|xss_clean' );
        $this->form_validation->set_rules('city','City','trim|required|min_length[2]|max_length[12]|xss_clean' );
        $this->form_validation->set_rules('zip_code','Zip Code','trim|required|integer|is_natural|min_length[5]|max_length[7]|xss_clean' );
        $this->form_validation->set_rules('payment','Payment_method','trim|required|xss_clean|callback_payment' );

        if($this->form_validation->run()==false){

            $this->smarty_properties['validate'] = validation_errors();
            $this->smarty_properties['title'] = str_replace(__CLASS__.'::','',__METHOD__);
            $this->smarty_properties['flash_create'] = $this->session->flashdata('create');
            $this->my_smarty->display(APPPATH.'views/contents/cart/payment_N_shipping.tpl',$this->smarty_properties);
        }

        else{

            $input['uid'] = $this->session->userdata('uid');
            $input = $input + $this->post;
            $is_inserted = $this->model_cart->create_table('shipping_n_payment',$input,"payment_N_shipping");

            if($is_inserted){

                redirect('cart/order');
            }
        }
    }

    public function payment(){

        if($this->input->post('payment')=='isracard') $this->post['payment'] ='isracard';
        elseif($this->input->post('payment')=='visa') $this->post['payment'] ='visa';
        elseif($this->input->post('payment')=='american express') $this->post['payment'] = 'American_express';
    }
}