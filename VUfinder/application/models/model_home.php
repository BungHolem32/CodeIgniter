<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Model_home extends CI_Model
{

    public function send_email($post)
    {
        $email_sent = null;
        $message = $this->prepare_message($post);
        $subject = 'ViewFinder - We got your message';
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'VuFinderCameras@gmail.com',
            'smtp_pass' => 'z5VE4alw6TL92jRIaO5S',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($config['smtp_user']);
        $this->email->to($post['email']);
        $this->email->subject($subject);
        $this->email->message($message);


        if ($this->email->send()) {

            $email_sent = true;

        } else {

            show_error($this->email->print_debugger());
        }

        return $email_sent;
    }


    public function prepare_message($post)
    {
        $message = null;

        $message = "<center><h1>hi  {$post['name']}, <br> we got your message  </h1>";
        $message .= "<h2>we will contact you as soon as possible with your answer </h2>";
        $message .= "<h2>we thank you  from viewFinder group &copy; {$this->smarty_properties['year']} </h2>";
        $message .= "<h3>please don't replay this message</h3></center>";

        return $message;
    }


    public function create_table($tables, $post, $name, $custom = null)
    {
        $is_created = false;
        $parameters['tables']['created'] = 0;

        /*======================IF THERE IS MORE THEN ONE TABLE========================================================*/
        if (is_array($tables) && is_array($post)) {

            /*if there is table roles insert values to it */
            if (in_array('user_roles', $tables)) {

                /*get the last user id that insert in the users table */
                $post[1][] = $this->get_max('view_finder_users', 'id') + 1;

                /*get the role id of the user*/
                $post[1][] = $post[1][0] == 'admin' ? 5 : ($post[1][0] == 'authenticated' ? 1 : 2);
                $arr = [$post[1][1], $post[1][2], $post[1][0]];
                $post[1] = $arr;
            }
            /*run loop on the tables*/
            foreach ($tables as $table_key => $table_value) {

                /*prepare the query and the inputs for user*/
                $parameters['tables'][$table_value] = $this->create_query($post[$table_key], $tables[$table_key]);

                /*count the inputs of the table */
                $parameters['tables'][$table_value]['columns'] = $this->count_table($table_value);

                /*assign the inputs and the number of them in sort varible */
                $table_columns = $parameters['tables'][$table_value]['columns'];
                $inputs = $parameters['tables'][$table_value]['num'];


                /*if the input not equal */
                if ($table_columns != ($inputs + 1)) {

                    /*throw error to the user */
                    $this->session->set_flashdata('create', 'the ' . $name[$table_key] . ' didn\'t added ,please check you code and try again');
                    return false;

                }
                /*if the inputs and the columns equal*/
                else {

                    /*insert the values and create new tables */
                    $query = $this->db->query($parameters['tables'][$table_value]['sql'], $parameters['tables'][$table_value]['inputs']);

                    /*if the query has results */
                    if ($query) {

                        /*count the number of creation */
                        $parameters['tables']['created']++;
                        $is_created = true;

                        /*if the number of tables equile to the number of tables */
                        if ($parameters['tables']['created'] == count($tables)) {

                            /*create flash data*/
                            $this->session->set_flashdata('create', $parameters['tables'][$table_value]['created'] . ' ' . $name . ' has been created');
                            $is_created = true;
                        }
                    } else {
                        /*create flash data with the number of tables that inserted*/
                        $this->session->set_flashdata('create', $parameters['tables']['created'] . ' ' . $name[$table_key] . ' has been created check your inputs');
                    }
                }
            }
            return $is_created;
        } /*==========================================IF THERE IS ONLY ONE TABLE========================================*/
        else {
            /*create insert qeury*/
            $parameters = $this->create_query($post, $tables);

            /*get the size of the table*/
            $parameters['columns'] = $this->count_table($tables);

            if ($parameters['columns'] == ($parameters['num'] + 1)) {

                $query = $this->db->query($parameters['sql'], $parameters['inputs']);

                if ($query) {

                    $is_created = true;
                    $this->session->set_flashdata('create', 'the ' . $name . ' has been created');
                }
                return $is_created;


            } else {
                $this->session->set_flashdata('create', 'the ' . $name . ' didnt created');
                return false;
            }
        }
    }


    public function count_table($table)
    {
        /*get the number of columns in the table*/

        $coulmns = null;

        $countsql = "SELECT COUNT(*)
					 FROM INFORMATION_SCHEMA.COLUMNS
					 WHERE table_schema = 'vufinder'
					 AND table_name =?";
        $table = 'view_finder_' . $table;

        $qeury = $this->db->query($countsql, $table);

        if ($qeury->num_rows() > 0) {

            foreach ($qeury->result_array() as $row) {


                $coulmns = $row['COUNT(*)'];
            }
        }
        return $coulmns;
    }

    public function create_query($inputs, $tables)
    {

        $parameters = ['num' => 0, 'columns' => null, 'inputs' => array(), 'sql' => "INSERT INTO  view_finder_{$tables}  VALUES (''"];
        foreach ($inputs as $key => $value) {

            if (count($inputs) > $parameters['num'] && !empty($value) && !stristr('select-box', $key) && !preg_match('/submit/',$key)) {

                $needle['search'] = ['_edit', '_add', '_create', 'categories'];
                $needle['replace'] = ['', '', '', 'category'];
                $needle['pass'] = '/(password)/';

                /*if there is  */
                $key = str_replace($needle['search'], $needle['replace'], $key);
                if (preg_match($needle['pass'], $key)) $value = sha1($value);


                $parameters['sql'] .= ',?';
                $parameters['num']++;
                $parameters["inputs"][$key] = $value;

            } elseif (count($inputs) == $parameters['num']) {
                break;
            }
        }
        $parameters['sql'] .= ')';

        return $parameters;

    }
}