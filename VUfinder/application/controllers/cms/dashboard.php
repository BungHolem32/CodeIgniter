<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public $post;
    public $prd_id;
    public $validation = ['basic' => 'trim|required|xss_clean', 'length' => 'min_length[2]|max_length[40]'];

    public function __construct()
    {
        parent::__construct();

        if (!$this->data['is_admin']) {

            redirect(site_url() . 'user/login');
        }

        $this->load->library('form_validation');
        $this->load->model('model_cms');
    }

    /*HOME PAGE OF CMS*/
    public function index()
    {

        $this->smarty_properties['title'] = 'Cms Welcome Screen';
        $this->smarty_properties['summery'] = $this->model_cms->status();

        $this->smarty_properties['session'] = $this->session;
        $this->my_smarty->display(APPPATH . 'views/contents/cms/welcome_dash.tpl', $this->smarty_properties);


    }

    /*PRODUCTS MANAGEMENT PAGE*/
    public function product_management()
    {
        $categories = $this->model_cms->get_all_products();

        if ($categories) {

            $this->smarty_properties['title'] = 'Dashboard Cms';
            $this->smarty_properties['session'] = $this->session;
            $this->smarty_properties['category_cms'] = $categories['categories'];
            $this->my_smarty->display(APPPATH . 'views/contents/cms/products_management.tpl', $this->smarty_properties);

        } else {

            $this->smarty_properties['category-cms'] = 'There is  no Products';
            $this->my_smarty->display(APPPATH . 'views/contents/cms/products_management.tpl', $this->smarty_properties);
        }
    }

    /*CREATE PRODUCT PAGE */
    public function create_product($id = null)
    {
        //get_category list from database
        $category = ($id) ? $this->model_cms->get_table('view_finder_categories', $id) : $this->model_cms->get_table('view_finder_categories');

        //add to the public post property array of all the inputs ;
        $this->post = $this->input->post(null, true);


        if (!$id) {

            $this->form_validation->set_rules('categories_input', 'Product Category:', $this->validation['basic'] . '|is_natural|callback_category_choose'); //callback have to*/

        } else {
            $this->post['categories_input'] = $this->security->xss_clean($id);
        }
        $this->form_validation->set_rules('name', 'Username', $this->validation['basic'] . '|max_length[40]');
        $this->form_validation->set_rules('model', 'Model :', $this->validation['basic']);
        $this->form_validation->set_rules('company', 'Company', $this->validation['basic']);
        $this->form_validation->set_rules('description', 'Description :', $this->validation['basic'] . '|min_length[5]');
        $this->form_validation->set_rules('price', 'Price : ', $this->validation['basic'] . '|is_decimal');
        $this->form_validation->set_rules('quantity', 'Quantity : ', $this->validation['basic'] . '|is_numeric');
        $this->form_validation->set_rules('discount', 'Discount :', $this->validation['basic'] . '|is_numeric');
        $this->form_validation->set_rules('visibility', 'Visibility :',  $this->validation['basic'].'|callback_visibility_check'); //call back visibility
        $this->form_validation->set_rules('comment', 'Comment :', $this->validation['basic']);
        $this->form_validation->set_rules('overview_create', 'OverView ', $this->validation['basic']);
        $this->form_validation->set_rules('features_create', 'Key Features ', $this->validation['basic']);
        $this->form_validation->set_rules('specs_create', 'Specs ', $this->validation['basic']);


        if ($this->form_validation->run() == FALSE) {

            if ($category) {

                $this->smarty_properties['category'] = $category['categories'];
            }

            $this->smarty_properties['id'] = $this->security->xss_clean($id);
            $this->smarty_properties['title'] = 'Add product';
            $this->my_smarty->display(APPPATH . 'views/contents/cms/create_product.tpl', $this->smarty_properties);

        } else {

            $img = $this->model_cms->do_upload($this->post);

            if($img){

                $saved = $this->model_cms->save_product($this->post, $img);


                if($saved){

                    redirect('cms/dashboard/product_management');

                }else{
                    header('Location: '.$_SERVER['PHP_SELF']);
                }
            }
        }
    }


    /*EDIT PRODUCT PAGE */
    public function edit_product($id = null)
    {
        $this->post = $this->input->post(null, true);

        $this->form_validation->set_rules('categories_input', 'Product Category :', $this->validation['basic'] . '|is_natural|callback_category_choose'); //callback have to*/
        $this->form_validation->set_rules('name', 'Product Name', $this->validation['basic']);
        $this->form_validation->set_rules('model', 'Model ', $this->validation['basic']);
        $this->form_validation->set_rules('company', 'Company ', $this->validation['basic']);
        $this->form_validation->set_rules('description', 'Description :', $this->validation['basic']);
        $this->form_validation->set_rules('price', 'Price ', $this->validation['basic'] . '|is_decimal');
        $this->form_validation->set_rules('quantity', 'Quantity  ', $this->validation['basic'] . '|is_numeric');
        $this->form_validation->set_rules('discount', 'Discount ', $this->validation['basic'] . '|is_numeric');
        $this->form_validation->set_rules('visibility', 'Visibility ','trim|xss_clean|callback_visibility_check'); //call back visibility
        $this->form_validation->set_rules('overview_edit', 'OverView ', $this->validation['basic']);
        $this->form_validation->set_rules('features_edit', 'Key Features ', $this->validation['basic']);
        $this->form_validation->set_rules('specs_edit', 'Specs ', $this->validation['basic']);


        if ($this->form_validation->run() == FALSE) {
            if ($id) {

                $this->post['id'] = $this->security->xss_clean($id);
                $prod = $this->model_cms->get_one_product($id);
                $categories = $this->model_cms->get_table('view_finder_categories');

                if ($categories && $prod) {

                    $this->smarty_properties['products'] = $prod;
                    $this->smarty_properties['categories'] = $categories['categories'];
                }

                $this->smarty_properties['title'] = 'Edit product Page';
                $this->smarty_properties['pic'] = $this->session->flashdata('pic');
                $this->smarty_properties['flash_update'] = $this->session->flashdata('edit_product');
                $this->my_smarty->display(APPPATH . 'views/contents/cms/edit_form.tpl', $this->smarty_properties);
            }
        } else {

            $img = $this->model_cms->do_upload($this->post);

            if($img){

                $update = $this->model_cms->save_product($this->post, $img, $id);

                if($update){

                    redirect('cms/dashboard/product_management');
                }
            }
            else{
                redirect('cms/dashboard/product_management');

            }
        }
    }

    /*CALL BACK VISIBILITY CHECK*/
    public function visibility_check()
    {
        $this->post['visibility'] = !empty($this->post['visibility']) ? 1 : 0;

    }

    /*CALL BACK CATEGORY CHOOSE*/
    public function category_choose()
    {
        if ($this->post['categories_input'] == -1) {

            $this->form_validation->set_message('category_choose', ' you must choose Category ');
            return false;
        } else {

            return true;
        }
    }

    /*UNIVERSAL DELETE FORM */
    public function delete_form($id = null, $url = null, $name = null)
    {
        //create array of product, product img ,table to indecate what deleted
        $is_deleted = ['product' => null, 'product_img' => null, 'tables' => null];
        /*variable for all the params from the selected table */
        $param = null;

        if ($url) {
            if ($url == 'category_management')

                /*check if the category have products*/
                $has_products = $this->model_cms->get_table('view_finder_products', null, 'category_id', $id);

                if (!empty($has_products)) {
                    /*create varible has products in the view*/
                    $this->smarty_properties['has_products'] = $has_products;
                }
            /*get the parameters from method get_del_table*/
            $table_parameter = $this->model_cms->get_del_table($id, $url, $name);

            if($table_parameter){

                $this->smarty_properties['products'] = $table_parameter[0];

            }
            $param = $table_parameter["parameters"];
        }

        if (isset($_POST['del'])) {


            /*PRODUCT DELETE WITH HIS PIC*/
            if (isset($this->smarty_properties['products']['table'])) {

                $is_deleted['product'] = $this->model_cms->delete_table($param['table'], null, $id, 'products');


                $is_deleted['product_img'] = $this->model_cms->delete_table('view_finder_product_images', null, $id, 'products_image');
            }
            /*USERS + CATEGORIES + ORDER DELETE*/

            else {

                $pattern = ['search' => ['/(view_finder_)/', '/(ies)$/'], 'replace' => ['', 'y']];

                $tab = preg_replace($pattern['search'], $pattern['replace'], $param['table']);
                $is_deleted['tables'] = $this->model_cms->delete_table($param['table'], null, $id, $tab);
            }


            if ($is_deleted['tables'] || $is_deleted['product'] && $is_deleted['product_img']) {

                redirect('/cms/dashboard/product_management');
            }
        }

        $this->smarty_properties['del'] = $id;
        $this->smarty_properties['title'] = 'Delete alert';
        $this->smarty_properties['name'] = !empty($param['name']) ? $param['name'] : $this->security->xss_clean($name);
        $this->smarty_properties['json'] = (!empty($table_parameter['json'])) ? $table_parameter['json'] : '';
        $this->smarty_properties['flash'] = $this->session->set_flashdata('delete');
        $this->smarty_properties['prod'] = $this->session->set_flashdata('cat');

        $this->my_smarty->display(APPPATH . 'views/contents/cms/delete_form.tpl', $this->smarty_properties);
    }


    /*ORDERS PAGE */
    public function orders_summery()
    {
        $orders = $this->model_cms->get_orders();

        if (count($orders) > 0) {

            $this->smarty_properties['orders'] = $orders['orders'];
        }

        $value = $this->uri->segment(3);
        $this->smarty_properties['title'] = $value . ' Page';
        $this->my_smarty->display(APPPATH . 'views/contents/cms/order_summery.tpl', $this->smarty_properties);
    }


    /*CATEGORY MANAGEMENT*/
    public function category_management()
    {

        $this->post = $this->input->post(null, true);

        //create category
        if (isset($_POST['submit_create'])) {

            $this->form_validation->set_rules('c_name', 'Category name ', $this->validation['basic'] . 'max-length[20]|callback_category_exist');
            $this->form_validation->set_rules('c_machine', 'Machine Name ', $this->validation['basic'] . 'max-length[20]');
            $this->form_validation->set_rules('visibility_create', 'visibility ', $this->validation['basic'] . 'max-length[1]|integer|callback_vis_check');
            $this->form_validation->set_rules('c_comment', 'Comment ', $this->validation['basic'] . '|max-length[60]');
        }

        //edit category
        if (isset($_POST['submit_edit'])) {

            $this->form_validation->set_rules('c-name-edit', 'Name', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('c-machine-edit', 'Machine Name ', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('visibility_edit', 'visibility ', $this->validation['basic'] . 'max-length[1]callback_vis_check');
            $this->form_validation->set_rules('c-comment-edit', 'Comment ', $this->validation['basic'] . 'max-length[60]');
        }


        //if the validation is false
        if ($this->form_validation->run() == FALSE) {

            $this->smarty_properties['categories'] = $this->model_cms->get_table('view_finder_categories');
            $this->smarty_properties['category_first'] = $this->smarty_properties['categories']['categories'][0];
            $this->smarty_properties['validation_error'] = validation_errors();
            $this->smarty_properties['title'] = "Create New Category";
            $this->smarty_properties['flash_create'] = $this->session->flashdata('create');
            $this->smarty_properties['flash_edit'] = $this->session->flashdata('edit');
            $this->smarty_properties['flash_delete'] = $this->session->flashdata('delete');
            $this->my_smarty->display(APPPATH . 'views/contents/cms/category_management.tpl', $this->smarty_properties);

        } else {

            //if we create category
            if (!empty($this->post['c_name'])) {

                $insert = $this->model_cms->create_table('categories', $this->post, 'category');

                if ($insert) {

                    redirect('cms/dashboard/category_management');
                }


            } //if we edit category

            elseif (isset($this->post['submit_edit'])) {

                $is_updated = $this->model_cms->update_table('view_finder_categories', $this->post, 'category');

                if ($is_updated) {

                    redirect('cms/dashboard/category_management');
                }
            }
        }
    }


    /*USER MANAGEMENT PAGE */
    public function user_management()
    {
        $this->post = $this->input->post(null, true);

        /*check if the user ask for edit current user*/
        if (isset($_POST['submit_edit'])) {

            $this->form_validation->set_rules('firstName_edit', 'First Name', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('lastName_edit', 'Last Name', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('gender_edit', 'Gender', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('role_edit', 'Role', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('select_box_edit', 'Role', $this->validation['basic'] . '|valid_email|max-length[20]');
        } /*check if the user ask for create new user*/
        elseif (isset($_POST['submit_add'])) {

            $this->form_validation->set_rules('firstName_add', 'First Name', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('lastName_add', 'Last Name', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('gender_add', 'Gender', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('role_add', 'Role', $this->validation['basic'] . '|max-length[20]');
            $this->form_validation->set_rules('email_add', 'Email', $this->validation['basic'] . '|max-length[40]');
            $this->form_validation->set_rules('password_add', 'Password', $this->validation['basic'] . '|max-length[40]');
        }


        /*if doesnt pass validation run this code*/
        if ($this->form_validation->run() == FALSE) {

            $this->smarty_properties['title'] = 'User Management';
            $this->smarty_properties['users_list'] = $this->model_cms->get_table(array('view_finder_users', 'view_finder_user_roles'), null, 'r.uid', 'u.id');
            $this->smarty_properties['first_user'] = $this->smarty_properties['users_list'][0];
            $this->smarty_properties['flash_create'] = $this->session->flashdata('create');
            $this->smarty_properties['flash_edit'] = $this->session->flashdata('edit');
            $this->smarty_properties['flash_delete'] = $this->session->flashdata('delete');
            $this->my_smarty->display(APPPATH . 'views/contents/cms/user_management.tpl', $this->smarty_properties);
        } else {

            /*edit user*/
            if (isset($this->post['submit_edit'])) {

                $is_edited = $this->model_cms->update_table('users', $this->post, 'user');

                if ($is_edited) {

                    redirect('cms/dashboard/user_management');
                }
            } /*add user*/
            elseif (isset($this->post['submit_add'])) {

                /*create input for the users_role table */
                $roles[] = $this->input->post('role_add', true);

                /*unset the inputs from this-post*/
                unset($this->post['role_add']);
                $is_created = $this->model_cms->create_table(array('users', 'user_roles'), array($this->post, $roles), array('user', 'role'));
                redirect('cms/dashboard/user_management');
            }
        }
    }


    /*CALL BACK VISIBILITY CHECK */
    public function vis_check()
    {

        if (isset($this->post['visibility_edit'])) {

            $this->post['visibility_edit'] = isset($this->post['visibility_edit']) ? 1 : 0;

        }
        if (isset($this->post['visibility_create'])) {

            $this->post['visibility_create'] = isset($this->post['visibility_create']) ? 1 : 0;

        }

    }


    /*CALL BACK CATEGORY EXIST*/
    public function category_exist()
    {
        $is_exist = $this->model_cms->check_existence($this->post['c_name']);

        if ($is_exist) {

            $this->form_validation->set_message('category_exist', 'The %s is already exist');
            return false;

        } else {

            return true;
        }
    }


    /*BASE LANDING INFORMATION CATEGORY EDIT*/
    public function edit_category()
    {
        $category_id = $this->input->post('id', true);
        $category = $this->model_cms->get_table('view_finder_categories', $category_id);
        $this->smarty_properties['cat'] = $category['categories'][0];
        echo json_encode($category['categories'][0]);

    }


    /*BASE LANDING INFORMATION USER EDIT*/
    public function users_edit()
    {
        $users = $this->input->post('user_id', true);
        $user = $this->model_cms->get_table('view_finder_users', null, 'id', $users);
        echo json_encode($user['users'][0]);
    }

    public function change_active(){

        $this->post = $this->input->post(null,true);


        $images_id = $this->model_cms->make_active('view_finder_product_images',$this->post);

        $this->session->set_flashdata('pic','picture changed');


    }
}
