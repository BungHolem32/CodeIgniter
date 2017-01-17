<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//class cart_model is doing

class Model_cart extends CI_Model
{
	public function get_product_by_id($id){

		$product = null;

		$sql = 'SELECT i.image,p.* FROM view_finder_products p
				JOIN view_finder_product_images i ON
			    i.pid = p.id WHERE p.id = ?';

		$query = $this->db->query($sql, array($id));

		if($query->num_rows()>0){

			$product = $query->row_array();
		}

		return $product;
	}

	public function add_to_cart($product){


		$data = array(
			'id'      => $product['id'],
			'qty'     => 1,
			'price'   => $product['price'],
			'name'    => $product['name'],
		);

		$this->cart->insert($data);

	}

	public function send_order($order){

		$order_sent = null;
		$id = $this->session->userdata('uid');
		$sql = "INSERT view_finder_orders VALUES ('','$id','$order',NOW())";

		$query = $this->db->query($sql);

		if($this->db->affected_rows()){

			$this->cart->destroy();
            $this->session->unset_userdata('inputs');
			$order_sent = true;
		}

		return $order_sent;
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
        }
        /*==========================================IF THERE IS ONLY ONE TABLE========================================*/
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


    /*get the number of columns in the table*/
    public function count_table($table)
    {

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

            if (count($inputs) > $parameters['num'] && !empty($value) && !preg_match('/submit/',$key)) {

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

        $this->session->set_userdata($parameters);
        return $parameters;

    }


    public function send_mail($input,$email,$order)
    {
        $email_sent=null;

        $subject  = 'Order Information-do Not Replay!!';
        $message = $this->get_message($order,$input);

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'viewfinderltd@gmail.com',
            'smtp_pass' => 'view271282finder',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);


        if ($this->email->send()) {

            $email_sent = true;

        } else {

            show_error($this->email->print_debugger());
        }

        return $email_sent;
    }



    public function get_message($order,$input)
    {


        $message = '<h2> Hi ' . $input['fullname'] . '</h2>';
        $message .='<h3>Your Order confirmed.<br>viewFinder will update you when<br/>';
        $message .='your order ships to ' . $input['street'] . ' </h3>';
        $message .= '<h3>   you paid ' . $this->cart->total() . '$ with payment Method -' . ucfirst($input['payment']) . '</h3>';
        $message .= '<h3>   here is your order details</h3>';
        $message .= "<table border=\"1\" cellpadding=\"2\" cellspacing=\"1\">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>SubTotal</th>
                    </tr>";
        foreach ($order as $value) {
            $message .= "<tr>
                            <td>{$value['name']}</td>
                            <td>{$value['price']}$</td>
                            <td>{$value['qty']}</td>
                            <td>{$value['subtotal']}$</td>
                        </tr>";
        }
            $message .='</table>';
            return $message;
        }


}


