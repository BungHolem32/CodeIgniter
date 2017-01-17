<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 */
class User extends MY_Controller
{
    public $post = '';
    public $user = '';
    public $url_name;
    public $validation = ['basic' => 'trim|required|xss_clean|min_length|2'];


    //run the consturct & load the form validation + model user
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->smarty_properties['validation_error'] = validation_errors();
        $this->load->model('model_user');
    }

    //controller for the login method
    public function login()
    {
        //redirect to home page ,if  the page if the user is login
        if ($this->data['is_login']) redirect();

        //insert all the input to the post propertie, and clean from xss
        $this->post = $this->input->post(null, true);

        //validate the inputs : email + password - at email insert method that check the validation if there is name and pass in the database
        $this->form_validation->set_rules('email', 'Email', $this->validation['basic'] . '|valid_email|callback_email_validation');
        $this->form_validation->set_rules('password', 'Password', $this->validation['basic']);


        //if the validation doesn't  pass  redirect us to the login page;
        if ($this->form_validation->run() == false) {

            //get the method name;
            $value = preg_replace('/[User::.php]/', '', __METHOD__);


            $this->smarty_properties['title'] = 'login_page';
            $this->smarty_properties['validation_error'] = validation_errors();
            $this->my_smarty->display(APPPATH . 'views/contents/user/login.tpl', $this->smarty_properties);
            //if validation pass redirect to the home page
        } else {

            redirect("http://".base_url());
        }
    }

    //callback method from the email rules
    public function email_validation()
    {
        //call the model, method email validation. and pass the email and password of the user.
        $is_login = $this->model_user->email_validation($this->post['email'], $this->post['password']);

        //enter if the login return true
        if ($is_login) {
            return true;
        } else {

            //enter if the user or pass not valid , and throw error
            $this->form_validation->set_message('email_validation', 'validation didn\'t pass check your details');

            return false;
        }
    }

    //controller for registration page
    public function register()
    {

//        //if there is login
//        if ($this->data['is_login'])
//            redirect();

        //put all the inputs in the $post propertie
        $this->post = $this->input->post(null, true);

        //validate all the inputs
        $this->form_validation->set_rules('firstName', 'First  Name', $this->validation['basic'] . '|max_length[12]');
        $this->form_validation->set_rules('lastName', 'Last Name', $this->validation['basic'] . '|max_length[12]');
        $this->form_validation->set_rules('gender', 'Gender', $this->validation['basic'] . '|callback_gender_check');

        //validate regular stuff and add new callback that check if the email exist
        $this->form_validation->set_rules('email', 'Email', $this->validation['basic'] . '|valid_email|callback_email_exist');
        //validate and check if there is a match to the reenter pass
        $this->form_validation->set_rules('password', 'Password', $this->validation['basic'] . '|matches[rewrite_password]');

        $this->form_validation->set_rules('rewrite_password', 'Rewrite_Password', $this->validation['basic']);

        //redirect  to the same form if the validation isn't pass
        if ($this->form_validation->run() == false) {

            $this->smarty_properties['title'] = 'Register Page';
            $this->smarty_properties['validation_error'] = validation_errors();
            $this->my_smarty->display(APPPATH . 'views/contents/user/register.tpl', $this->smarty_properties);

            //if the validation pass enter
        } else {
            //create variable $is register that gets the result of the method save user (save information in the db)
            $is_register = $this->model_user->signIn_user($this->post);

            //enter if the information is saved and redirect to the home page
            if ($is_register) {
                die('is registered');
                /*prepare message*/
                $subject = 'registration completed';
                $message = '<h2>thank you for registered to our site, the best place to buy cameras </h2>';
                $message .= '<p><h3>here is yours connection information:</h3></p>';
                $message .= '<p>user name :<strong>' . $this->post["email"] . '</strong></p>';
                $message .= '<p>password name :<strong>' . $this->post["password"] . '</strong></p>';

                /*send message*/
                $sent = $this->model_user->send_mail(null, $this->post['email'], $subject, $message);

                if ($sent) {

//                    redirect();
                }
            } //enter if the information doesn't saves and redirect to registeration page
            else {
//                redirect('user/register');
            }
        }
    }

    //call back method that check if there is email like the one we insert
    public function email_exist()
    {
        //create variable the get the result of the model_user method  email_exists
        $is_exist = $this->model_user->email_exist($this->post['email']);

        //enter if the email aint exist
        if (!$is_exist) {

            return true;
            //enter if the email already exist
        } else {

            //print message that tell the email already exist
            $this->form_validation->set_message('email_exist', 'your email is already exist please try again');

            return false;
        }
    }

    //gender check callback
    public function gender_check()
    {

        if ($this->post['gender'] != 'Male' && $this->post['gender'] != 'Female') {

            $this->form_validation->set_message('gender_check', 'you must check on of the following:   "male" | "female" ');
            return false;
        } else {
            return true;
        }
    }

    // edit form method
    public function edit_form()
    {

        if (!$this->data['is_login']) {
            redirect();
        }
        $this->post = $this->input->post(null, true);

        //GET THE URL OF THE PAGE
        $this->url_name = $this->uri->segment(2);

        /*SEND INFORMATION ABOUT THE USER  ON LANDING FROM THE SESSION*/
        $user = $this->model_user->prepare_user($this->session->all_userdata());


        /*VALIDATION CONFIGURATION*/
        $validation = ['basic' => 'trim|required|xss_clean', 'max_length' => '|min_length[2]|max_length[12]'];

        // submit first or last name clicked
        if ($this->input->post('submit-first_name') || $this->input->post('submit-last_name')) {

            $this->post[1] = 'Name';
            $this->input->post('submit-first_name') ? $this->post[0] = 'first' : $this->post[0] = 'last';
            $this->form_validation->set_rules($this->post[0] . $this->post[1], ucfirst($this->post[0] . $this->post[1]), $validation['basic'] . $validation['max_length']);
        } //submit email
        elseif ($this->input->post('submit-email')) {

            $this->post[] = key($this->post);
            /*Email*/
            $this->form_validation->set_rules($this->post[0], ucfirst($this->post[0]), $validation['basic'] . '|valid_email|callback_email_exist');
        } //submit gender
        elseif ($this->input->post('submit-gender')) {
            $this->post[] = key($this->post);

            /*Gender*/
            $this->form_validation->set_rules($this->post[0], ucfirst($this->post[0]), $validation['basic']);
        } //submit password
        elseif ($this->input->post('submit-password')) {

            $this->post[] = 'password';

            /*Password*/
            $this->form_validation->set_rules($this->post[0], ucfirst($this->post[0]), $validation['basic'] . $validation['max_length']);
        }


        //AFTER CREATE THE VALUE PASS IT TO THE PASSWORD CHECK
        $this->form_validation->set_rules('password-' . $this->post[0], 'confirm Password', $validation['basic'] . $validation['max_length'] . '|callback_match_password');


        //REDIRECT TO THE SAME PAGE IF THE VALIDATION ISN'T PASS
        if ($this->form_validation->run() == false) {
            $this->smarty_properties['title'] = 'User ' . $this->url_name;
            $this->smarty_properties['user'] = $user;
            $this->smarty_properties['validate'] = validation_errors();
            $this->smarty_properties['changed'] = $this->session->flashdata('changed');
            $this->my_smarty->display(APPPATH . 'views/contents/user/edit_form.tpl', $this->smarty_properties);
        } //ENTER TO THIS PART WHEN THE VALIDATION PASS
        else {
            $input = array_keys($this->post);

            if ($input[0] == 'gender') $input[1] = $input[0];

            if ($input[0] == 'password-password') $input[0] = $input[1];

            //enter to the update information method in the model_controller
            if ($this->input->post('submit-' . $input[0])) {
                $change = $this->model_user->update($input[0], $this->post[$input[1]], $user['id']);

            } else {

                $change = $this->model_user->update($input[0], $this->post[$input[0]], $user['id']);
            }

            //if the  value is true
            if ($change) {
                if (preg_match('/(last)|(first)/', $this->post[0])) {
                    $this->post[0] = $this->post[0] . ' Name';
                }
                $this->session->set_flashdata('changed', "the {$this->post[0]}  has been updated");
                redirect('user/edit_form');
            }
        }
    }


// 	check if the password is matched
    public function match_password()
    {
        $is_matched = $this->model_user->match_password($this->post['password-' . $this->post[0]]);
        if ($is_matched) {
            return true;
        } else {

            $this->form_validation->set_message('match_password', ' #your password is incorrect ');
            return false;
        }
    }

//    logout method
    public function logout()
    {

        $log_out = $this->model_user->logout();

        if ($log_out) {

            redirect("http://".base_url());;
        }
    }

//  forgot password method
    public function forgot_pass()
    {

        if ($this->data['is_login']) {
            redirect();
        }
        $this->post = $this->input->post(null, true);

        $this->form_validation->set_rules('email', 'Forgot password', $this->validation['basic'] . '|callback_check_password');

        if ($this->form_validation->run() == false) {
            $this->smarty_properties['validate'] = validation_errors();
            $this->smarty_properties['title'] = str_replace(__CLASS__ . '::', '', __METHOD__);
            $this->my_smarty->display(APPPATH . 'views/contents/user/forgot_pass.tpl', $this->smarty_properties);
        } else {
            redirect();
        }
    }

    public function check_password()
    {


        $is_exist = $this->model_user->email_exist($this->post['email']);

        if ($is_exist) {
            $email_sent = $this->model_user->forgot_password($this->post['email']);
            if ($email_sent) {
                $this->form_validation->set_message('check_password', '#Your rest password Was sent to your mail');
                return true;
            } else {
                $this->form_validation->set_message('check_password', '#the email was not sent');
                return false;
            }

        } else {
            $this->form_validation->set_message('check_password', ' #the user didn\'t found');
            return false;
        }
    }
}