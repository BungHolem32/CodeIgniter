<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//class login_model is doing

class model_user extends CI_Model
{

    //class that checked if the email is exist
    public function email_exist($email)
    {
        $email_exist = null;

        $sql = 'SELECT * FROM view_finder_users WHERE email = ? ';

        $query = $this->db->query($sql, $email);

        if ($query->num_rows() > 0) {

            $email_exist = true;
        }
        return $email_exist;

    }

    //check if the user is in the database , if it is ( save it to the database);
    public function email_validation($email, $password)
    {
        $valid = null;
        $pwd = hash_him($password);

        $sql = 'SELECT * FROM view_finder_users u
                    JOIN view_finder_user_roles r ON u.id = r.uid
                    WHERE u.email = ? AND u.password = ? LIMIT 1';


        $query = $this->db->query($sql, array($email, $pwd));

        if ($query->num_rows() > 0) {

            $user = $query->row_array();


            $set_user['uid'] = $user['id'];
            $set_user['firstName'] = $user['firstName'];
            $set_user['lastName'] = $user['lastName'];
            $set_user['gender'] = $user['gender'];
            $set_user['email'] = $user['email'];
            $set_user['role'] = $user['role'];

            $valid = $this->set_login($set_user);
        }

        return $valid;
    }

    //add user to the session and if the user is admin unset the role of it, so user can't  enter as admins
    public function set_login($user)
    {

        $user['admin'] = ($user['role'] == 5) ? true : false;
        unset($user['role']);
        $this->session->set_userdata($user);

        return true;

    }

    //log out from the site and destroy the session
    public function logout()
    {
        $del_user['uid'] = '';
        $del_user['firstName'] = '';
        $del_user['lastName'] = '';
        $del_user['email'] = '';
        $del_user['role'] = '';


        $this->session->set_userdata($del_user);

        return true;
    }

    //save user after puss validiation
    public function signIn_user($post)
    {

        $pwd = hash_him($post['password']);

        $sql = "INSERT INTO view_finder_users VALUES ('',?,?,?,?,?)";

        $properties['first'] = $post['firstName'];
        $properties['last'] = $post ['lastName'];
        $properties['gender'] = $post['gender'];
        $properties['email'] = $post['email'];
        $properties['pwd'] = $pwd;


        $query = $this->db->query($sql, $properties);

        if ($this->db->affected_rows()) {

            $id = $this->db->insert_id();

            $data = array('uid' => $id, 'role' => 2,'type'=>'authenticated');

            $this->db->insert('view_finder_user_roles  ', $data);

            $set_user['uid'] = $id;
            $set_user['role'] = 2;
            $set_user['firstName'] = $post['firstName'];
            $set_user['lastName'] = $post['lastName'];
            $set_user['gender'] = $post['gender'];
            $set_user['email'] = $post['email'];
            return $this->set_login($set_user);
        }
        return false;
    }

    //send mail for forgotten password
    public function forgot_password($email)
    {
        $email_sent = null;
        $pass = (random_password());
        $hash = hash_him($pass);

        $sql = "UPDATE view_finder_users SET password = ?
                    WHERE email = ?";
        $query = $this->db->query($sql, array($hash, $email));

        if ($this->db->affected_rows()) {

            $message = '<h2>Youve asked for reset your password </h2><br/>';
            $message .= 'This password is temporary , for maximum protection remember to change it as soon as possible <br/>';
            $message .= '<br>Your new  password : <b>' . $pass . '</b>';
            $subject = 'viewFinder Reset Password';
            $email_sent = $this->send_mail($pass, $email ,$subject ,$message );
        }
        return $email_sent;
    }




    //check if the password match
    public function match_password($pass)
    {
        $matched = null;
        $id = $this->session->userdata('uid');
        if ($pass) {

            $pass = hash_him($pass);
        }

        $sql = "SELECT * FROM view_finder_users
					WHERE password = ? AND id=?";

        $query = $this->db->query($sql, array($pass, $id));
        if ($query->num_rows() > 0) {

            $matched = true;
        }
        return $matched;
    }


    //update info about user
    public function update($column, $value, $id)
    {
        $update = null;

        if ($column == 'password') {

            $value = hash_him($value);
        }

        $sql = "UPDATE view_finder_users Set $column = ?
			        WHERE id = ?";

        $query = $this->db->query($sql, array($value, $id));

        if ($query > 0) {

            $this->session->set_userdata($column, $value);

            $update = $column . 'changed';
        }
        return $update;
    }

    public function  prepare_user()
    {
        //get all the information of the $user from session  to parse it on the form at the start;
        $user['first'] = $this->session->userdata('firstName');
        $user['last'] = $this->session->userdata('lastName');
        $user['gender'] = $this->session->userdata('gender');
        $user['email'] = $this->session->userdata('email');
        $user['id'] = $this->session->userdata('uid');

        return $user;
    }

    //method that sends mail
    public function send_mail($pass = null , $email = null, $subject = null , $message = null)
    {
        $email_sent = null;
        $mail = new PHPMailer(true);                                                             //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
        try {
            $mail->IsSMTP();                                                                     // Use SMTP
            $mail->SMTPAuth   = true;                                                            // enabled SMTP authentication
            $mail->SMTPSecure = "ssl";                                                           // prefix for secure protocol to connect to the server
            $mail->Host       = "smtp.gmail.com";                                                // setting GMail as our SMTP server
            $mail->Port       = 465;                                                             // SMTP port to connect to GMail
            $mail->Username = "viewfinderltd@gmail.com";                                         // user email address
            $mail->Password = "view12345finder";                                                  // password in GMail
            $mail->AddReplyTo('admin@viewfinder-ltd.com', 'admin');                              //email address that receives the response
            $mail->AddAddress('admin@viewfinder-ltd.com', 'Support Team Viewfinder');            //Alternative Address
            $mail->SetFrom('admin@viewfinder-ltd.com', 'Support Team Viewfinder');               //Who is sending the email
            $mail->AddReplyTo('admin@viewfinder-ltd.com', 'Support Team Viewfinder');            //email address that receives the response
            $mail->Subject = $subject;
            $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
            $mail->Body = $message;                                                              // Body massage
            $destination = $email;                                                               // Who is addressed the email to
            $mail->AddAddress($destination, strstr($email, '@', true));                          //first parameter is the destination and the second is the part of the mail with the name
            $sent=$mail->Send();
            if($sent){
                $email_sent = true;
            }
        }
        catch (phpmailerException $e) {
            echo $e->errorMessage();                                                            //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage();                                                              //Boring error messages from anything else!
        }
        return $email_sent;
    }
}