<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//class Model_cms_model is doing
class Model_cms extends CI_Model
{
    /*GET ALL THE PRODUCTS */
    public function get_all_products()
    {
        $data = array();

        /*get categories*/
        $sql_cat = $this->db->get('view_finder_categories');
        if($sql_cat->num_rows()>0) {

            foreach ($sql_cat->result(true) as $cat_key => $cat_val) {

                $data['categories'][$cat_val['name']] = $cat_val;

                /*get products*/
                $sql_product = "SELECT * FROM view_finder_products
                                WHERE category_id = ?";
                $query_product = $this->db->query($sql_product, $cat_val['id']);

                if ($query_product->num_rows() > 0) {

                    foreach ($query_product->result(true) as $product_key => $product_val) {

                        $data['categories'][$cat_val['name']]['products'][$product_val['name']] = $product_val;

                        /*get specs*/
                        $sql_info = "SELECT overview,key_features,specs
                                     FROM view_finder_products_specs
                                     WHERE pid = ?";
                        $query_info = $this->db->query($sql_info, $product_val['id']);

                        if ($query_info->num_rows() > 0) {

                            foreach ($query_info->result(true) as $info_key => $info_val) {

                                $data['categories'][$cat_val['name']]['products'][$product_val['name']]['info'] = $info_val;

                                /*get product images*/
                                $sql_images = "SELECT image,comment
                                               FROM view_finder_product_images
                                               WHERE pid = ?
                                               AND active = 1";
                                $query_images = $this->db->query($sql_images, $product_val['id']);


                                if ($query_images->num_rows() > 0) {

                                    foreach ($query_images->result(true) as $image_key => $image_val) {

                                        $data['categories'][$cat_val['name']]['products'][$product_val['name']]['images'] = $image_val;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return $data;
    }

    /*GET ONE PRODUCT WITH ALL HIS IMAGES */
    public function get_one_product($id = null)
    {
        $data = null;

        $sql_products = "SELECT p.*,c.name category_name FROM view_finder_products p
                         JOIN view_finder_categories c ON c.id=p.category_id  WHERE p.id=? ";

        $sql_images = "SELECT * FROM view_finder_product_images
                      WHERE view_finder_product_images.pid=?";

        $sql_info = "SELECT overview,key_features,specs
                     FROM view_finder_products_specs
                     WHERE pid = ?";

        $query_products = $this->db->query($sql_products, (int)$id);
        $query_images = $this->db->query($sql_images,(int)$id);
        $query_info = $this->db->query($sql_info,(int)$id);


        if ($query_products->num_rows() > 0) {
            foreach($query_products->result(true) as $key_products=>$val_products)
            $data[$val_products['name']] = $query_products->row_array();

            if ($query_images->num_rows() > 0) {

                $data[$val_products['name']]['images'] = $query_images->result(true);
            }

            else {
                $data[$val_products['name']]['images'] = array('image' => 'default.png', 'pid' => 0, 'comment' => 'default pic',);
            }

            if($query_info->num_rows()>0){
                foreach($query_info->result(true) as $info_key=>$info_val)
                $data[$val_products['name']]['info'] = $info_val;

            }
        }

        return $data;
    }


//==================================================GET ORDERS OF USERS======================================================================================================
    public function get_orders()
    {
        $order = array();

        $sql = "SELECT u.firstName,u.lastName,uid,data_jason,date,o.id AS oid
                FROM view_finder_orders o
                INNER JOIN view_finder_users u ON o.uid = u.id
                ORDER BY o.date ASC ";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {

            foreach ($query->result_array() as $key => $value) {

                if ($value['data_jason']) {

                    $value['data_jason'] = (json_decode($value['data_jason'], true));
                }
                $order['orders'][] = ($value);
            }
        }
        return $order;
    }


//================================================GET THE LAST ID THAT INSERT TO THE PRODUCTS=======================================================================
    public function get_max($table, $param)
    {
        $this->db->select_max($param);
        $query = $this->db->get($table);

        if ($query->num_rows() > 0) {

            foreach ($query->row() as $value) {

                $param = $value;
            }

            return $param;
        }
    }


//===============================================UPLOAD FILE TO SERVER========================================================================================================
    public function do_upload($inputs)
    {
        $sent = null;
        /*get the machine_name of the product*/
        $machine = $this->get_table('view_finder_categories', $inputs['categories_input']);

        /*set the upload_path*/
        $config['upload_path'] = './public/img/products/' . $machine['categories'][0]['machine_name'];
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = '5242880';
        $config['max_width'] = '10240';
        $config['max_height'] = '7680';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload()) {
            $sent = $this->upload->data();

        }

        return $sent;
    }




//================================================INSERT/UPDATE PRODUCT INFO + PICTURES INTO DATABASE=============================================
    public function save_product($post, $filename = null, $id = null)
    {
        $saved = null;
        $this->load->helper('date');
        /*get the properties of the product from method get_properties*/
        $properties = $this->get_properties($post, $id);


        /*update if edit product*/
        if ($id) {

            $sql = "UPDATE view_finder_products SET category_id = ? ,name = ?, company = ?, model = ?,machine_name = ?,
                    slogan = ?, description = ? , price = ? ,quantity = ? , discount = ? , visibility = ? ,date_created = now()  WHERE id=?";

            $sql_info = "UPDATE view_finder_products_specs SET  product_name = ? , overview = ? , key_features = ? , specs = ? WHERE  pid= ?";
            $properties['id']= $id;
            unset($properties['comment']);

        } else {
            $sql = "INSERT INTO  view_finder_products VALUES ('',?,?,?,?,?,?,?,?,?,?,?,now())";
            $sql_info = "INSERT INTO  view_finder_products_specs VALUES ('',?,?,?,?,?)";
        }
        $query = $this->db->query($sql, $properties);

        /*check if product insert */
        if ($query) {

            $info['pid'] =($id)?$id: $this->db->insert_id();
            $info_add = $this->get_properties($post, null, null, 'true');


            $info = ($id)?  $info_add + $info: $info + $info_add ;

            $query_info = $this->db->query($sql_info, $info);

            /*check if the prodcut info has insert*/
            if($query_info){

                $product_img[] = $info['pid'];

                $img_save = $this->get_properties($post,$id,$filename);

                $img_save = $product_img + $img_save;


                $img = $this->save_image($img_save, $filename, $id);

                if($img){

                    $this->session->set_flashdata('feedback', 'view finder products table has been saved');
                    $saved = true;
                }

                else{
                    $this->session->set_flashdata('feedback', 'view finder products saved but your images didn\'t  check if your img pass validation');
                }
            }
            else{

                $this->session->set_flashdata('feedback', 'product saved, but product-info didn\'t, please contact your admin');
            }
        }
        else{

            $this->session->set_flashdata('feedback', 'product didn\'t save please contact your admin');
        }

        return $saved;
    }


    /*SAVE_PRODUCT CALLBACK FOR SAVING THE PROPERTIES OF THE PRODUCT = STEP 2 */
    public function get_properties($post, $id= null, $filename = null,$info = null)
    {
        $prop = [];

        /*products info */
        if ($info) {

            foreach ($post as $info_key => $info_val) {
                $prop['name'] = $post['name'];
                if (preg_match('/(overview)|(features)|(specs)/', $info_key)) {

                    $info_key = preg_replace('/(_create)|(_edit)/', '', $info_key);
                    $prop[$info_key] = $info_val;
                }
            }
            return $prop;
        }

        //products images
        if ($filename) {

            if ($id) {

                $query = $this->db->get_where('view_finder_product_images', array('pid' => $id));
                $prop['images'] = $query->row_array();
                $prop['current_file_path_img'] = 'public/img/products/' . $prop['images']['image'];



            }
            $dir = 'C:/xampp/htdocs/VUfinder/public/img/products/';
            $prop['filename'] = str_replace($dir, '', $filename['full_path']);
            $prop['path'] = $this->get_table('view_finder_categories', $post['categories_input'], 'categories');
            $prop['new_dir'] = 'public/img/products/' . $prop['filename'];
            $prop['comment'] = $post['comment'];
            return $prop;
        }
//        else {
//
///*            $prop['filename'] = $prop['path'][0]['machine_name'] . '/' . $prop['machine'] . (strstr($prop['images']['image'], '.'));*/
//        }



        /*product*/
        foreach ($post as $product_key => $product_val) {

            $prop['category'] = $post['categories_input'];
            if ($product_key == 'slogan') $prop['machine'] = make_machine_name($post['name']);

            if ($product_key == 'categories_input' || preg_match('/(create)|(edit)|(submit)/', $product_key)) {
                continue;
            } elseif ($product_key == "visibility") {
                $prop['visibility'] = !empty($post['visibility']) ? 1 : '0';
            } else {
                $prop[$product_key] = $product_val;
            }
        }


        return $prop;
    }


    /*SAVE PRODUCT CALLBACK METHOD = STEP 3*/
    /*SAVE IMAGES */
    public function save_image($properties, $filename= null, $id = null)
    {
        $saved_img = null;

        /*UPDATE PRODUCT*/
        if ($id) {
            $pid = $id;

            /*update image location and update in the database*/
            if (is_null($filename)) {

                //================================================update the images=====================================
                $sql_img = "UPDATE view_finder_product_images SET  image=?, comment=?, active=? WHERE pid=?";

                $query_img = $this->db->query($sql_img, array($properties['filename'], $properties['comment'], $properties['images']['active'],$pid));

                //========================================move file if it change category===============================
                $file = file_get_contents($properties['current_file_path_img'], $properties['filename']);
                $moved = file_put_contents($properties['new_dir'], $file);
                unlink($properties['current_file_path_img']);

                if ($moved) {
                    return $moved;
                }
            }
        }

        /*ADDING NEW PICTURE FOR NEW PRODUCT*/
        else {
            $pid = $this->get_max('view_finder_products', 'id');
        }
        $sql_img = "INSERT INTO view_finder_product_images VALUES ('',?,?,?,?)";
        $saved_img = $this->db->query($sql_img, array($id, $properties['filename'], $properties['comment'], $properties["images"]['active']));

        //if the query is valid
        if ($this->db->affected_rows() > 0) {

            $saved_img = true;
        }
        return $saved_img;
    }


    /*CREATE TABLE (GENERIC METHOD)*/
    public function create_table($tables, $post, $name)
    {

        $is_created = false;
        $parameters['tables']['created'] = 0;

        /*======================IF THERE IS MORE THEN ONE TABLE========================================================*/
        if (is_array($tables) && is_array($post)) {

            /*if there is table roles insert values to it */
            if (in_array('user_roles', $tables)) {

                /*get the last user id that insert in the users table */
                $post[1][] = $this->get_max('view_finder_users', 'id') + 1;

               if(in_array('user_roles',$tables)){

                   /*get the role id of the user*/
                   $post[1][] = $post[1][0] == 'admin' ? 5 : ($post[1][0] == 'authenticated' ? 1 : 2);
                   $arr = [$post[1][1], $post[1][2], $post[1][0]];
                   $post[1] = $arr;
               }
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
                            $this->session->set_flashdata('create', $parameters['tables'][$table_value]['created'] . ' ' . $name['0'] . ' has been created');
                            $is_created = true;
                        }
                    } else {
                        /*create flash data with the number of tables that inserted*/
                        $this->session->set_flashdata('create', $parameters['tables']['created'] . ' ' . $name[$table_key] .'and'. ' has been created check your inputs');
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
                    $this->session->set_flashdata('create', 'the ' . $name . ' have been created');

                }



            } else {
                $is_created = false;
                $this->session->set_flashdata('create', 'the ' . $name . ' didnt created');

            }
        }
        return $is_created;
    }

/*CREATE TABLE INSIDE CALLBACK (COUNT TABLE COLUMNS)*/
    public function count_table($table,$rows = null)
    {
        /*get the number of columns in the table*/

        $number = null;

        /*if you count a columns*/
        if(!$rows){
            $sql = "SELECT COUNT(*)
					 FROM INFORMATION_SCHEMA.COLUMNS
					 WHERE table_schema = 'vufinder'
					 AND table_name = ?";
        }
        /*if you count rows*/
        else{

            $sql = "SELECT COUNT(*) FROM `?`";
        }


        $table = 'view_finder_' . $table;
        $qeury = $this->db->query($sql, $table);

        if ($qeury->num_rows() > 0) {

            foreach ($qeury->result_array() as $row) {


                $number = $row['COUNT(*)'];
            }
        }
        return $number;
    }

    /*CREATE TABLE INSIDE CALBACK (CREATE QUERY )*/
    public function create_query($inputs, $tables)
    {

        $parameters = ['num' => 0, 'columns' => null, 'inputs' => array(), 'sql' => "INSERT INTO  view_finder_{$tables}  VALUES (''" ];
        foreach ($inputs as $key => $value) {

            if (count($inputs) > $parameters['num'] && !empty($value) && !stristr('select-box', $key) && !preg_match('/(submit)/',$key)) {


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


    //==============================================GET TABLE==============================================================================================================
    function get_table($table, $id = null, $key = null, $param = null)
    {
        $categories = null;

        /*if there is more then one table */
        if(is_array($table) && $key && $param){

            $sql = "SELECT * FROM $table[0] u
                    JOIN $table[1] r ON $key = $param";

            $query = $this->db->query($sql);

            if ($query->num_rows() > 0) {

                $tables = $query->result_array();
            }

            return $tables;

        }else {

            if ($table && $id && $key && $param) {

                $query = $this->db->get_where($table, array('id' => $id, $key => $param));

            } //IF THERES ID GET ONLY ON CATEGORY WITH THE $ID'

            elseif ($id) {

                $query = $this->db->get_where($table, array('id' => $id));

            } /*IF THERE IS KEY AND VALUE FOR THE TABLE */
            elseif ($key && $param) {

                $query = $this->db->get_where($table, array($key => (int)$param));
            } //get_all categories
            else {
                $query = $this->db->get($table);
            }
        }
            if ($query->num_rows() > 0) {

                $categories[str_replace('view_finder_', '', $table)] = $query->result(true);

                //if there id return category with the key inserted
                if ($table == 'view_finder_categories' && $id && $key) {

                    $categories = $categories['categories'][0]['machine_name'];
                    if (!is_null($key))
                        return $categories;
                }
            }
        return $categories;
    }


    /*UPDATE TABLE*/
    public function update_table($table, $value = null, $name = null)
    {
        $is_updated = false;
        $data = [];
        foreach ($value as $key => $val) {

            /*check if there is value && if the key isn't 'submit or  selectbox'*/
            $search = array('c-', '-edit', '-add', '-del', '_edit');

            if (!empty($val)  && preg_match('/(submit)|(select-box)/g',$key))
                $data[str_replace('machine', 'machine_name', str_replace($search, '', $key))] = $val;
        }

        if(!empty($value['select-box'])) {
            $this->db->where('id', $value['select-box']);
        }


        $query = $this->db->update('view_finder_' . $table, $data);


        if ($query) {

            $this->session->set_flashdata('edit', 'This ' . $name . ' has been Updated');
            $is_updated = $query;


        } else {

            $this->session->set_flashdata('edit', 'This ' . $name . ' has been not been Updated');

        }

        return $is_updated;
    }

    /*check exsitence of a category*/
    public function check_existence($categroy)
    {
        $is_exist = null;
        $cat = $this->db->get_where('view_finder_categories', array('name' => $categroy));

        if ($cat->num_rows() > 0) {

            $is_exist = true;

        }

        return $is_exist;
    }

    /*DELETE FORM LAST STEP DELETE TABLE */
    //================================================DELETE PRODUCT FORM ================ =============================
    function delete_table($table = null, $elem = null, $id = null, $name = null)
    {

        $deleted = null;

        /*IF YOU HAVE TABLE*/
        if ($table) {

            /*IF YOU PASS KEY + VALUE*/
            if ($elem && $id) {

                $sql = "DELETE FROM `$table` WHERE ? = ?";
                $query = $this->db->query($sql, [$elem, ((int)$id)]);


            } /*IF YOU PASS ONLY VALUE OF ID ('ID' IS THE DEFAULT KEY)*/

            elseif ($id) {

                $sql = "DELETE FROM `$table` WHERE `id` = ? ";

                $query = $this->db->query($sql, [(int)($id)]);


                if ($this->db->affected_rows() > 0) {

                    $this->session->set_flashdata('delete', 'the ' . $name . ' has been deleted');;
                    $deleted = true;

                } else {

                    $this->session->set_flashdata('delete', 'the ' . $name . ' didn\"t deleted check your value');
                }
            }
        }

        else


        {

            $this->session->set_flashdata('del', 'you have to pass table argument');
        }

        return $deleted;
    }

    /**
     * @param $url
     * @param $id
     * @param $name
     */

    /*DELETE FORM - CALBACK THAT CATCH THE PAGE TABLE WE USE*/
    public  function get_del_table( $id,$url ,$name)
    {
        $newTable=null;
        $parameters['url'] = $this->security->xss_clean($url);
        $parameters['id'] = $this->security->xss_clean($id);
        $parameters['name'] = $this->security->xss_clean($name);
        $parameters['table'] = null;

        /*IF THE USER DELETE FROM THE PAGES?*/
        if ($parameters['url'] && $parameters['id']) {

            /*remove spaces from the url before checking it*/
            $parameters['url'] = trim($parameters['url']);

            /*PRODUCT MANAGEMENT*/
            if (preg_match('/(product_management)/', $parameters['url'])){
                $parameters['table'] = "view_finder_products";

                $newTable[0]['products'] = $this->get_one_product($parameters['id']);

            }
            /*EDIT PRODUCT - DELETE PIC*/
            else {

                if(preg_match('/(edit_product)/',$parameters['url'])) {
                    $parameters['table'] = "view_finder_product_images";
                    $parameters['name'] = $name;
                }
                /*USER MANAGEMENT*/
                elseif (preg_match('/(user_management)/', $parameters['url'])) {
                    $parameters['table'] = 'view_finder_users';

                } /*ORDER SUMMERY*/
                elseif (preg_match('/(orders_summery)/', $parameters['url'])) {
                    $parameters['table'] = 'view_finder_orders';
                    $parameters['name'] = $name;

                } /*CATEGORY MANAGEMENT*/
                elseif (preg_match('/(category_management)/', $parameters['url'])) {
                    $parameters['table'] = 'view_finder_categories';

                }

                $newTable[0] = $this->get_table($parameters['table'], $parameters['id']);
            }
                if ($parameters['table'] == 'view_finder_orders') {
                    $newTable['json'] = json_decode( $newTable[0]['orders'][0]['data_jason']);
                }

            }

        $newTable['parameters'] = $parameters;


        return $newTable;
        }

    /*get the exact number of items in all the databases*/
    public  function status(){

        $summery = null;
        $temp=null;

        $sql = 'select concat("select \'",table_name,"\', count(*) from ",table_name,";") from information_schema.tables WHERE table_schema = \'vufinder\'';

        /*create multipul querys for all the tables */
        $query = $this->db->query($sql);

        /*check if theres results */
        if($query->num_rows()>0){

            /*run loop on all of the sqls */
            foreach($query->result(true) as $key=>$value){

                   /*take the queries and loop them for get results */
                   foreach($value as $counts) {

                       /*prepare the sqls for foreach*/
                       $sqls = $this->db->query($counts);

                       /*run if theres results */
                       if ($sqls->num_rows() > 0) {

                           /*run loop on the results for the count from the data base */
                           foreach ($sqls->result(true) as $val) {


                               /*get the result of the keys (name of the table + sum of elements*/
                               foreach ($val as $ke => $va) {

                                        /*if the name start with v (view_finder) add it to the new variable $summery*/
                                       if (preg_match("/^v/", $va)) {

                                           $summery[str_replace('view_finder_', '', $ke)] = $val;
                                           $temp = [str_replace('view_finder_', '', $ke)];
                                       /*else its the number  insert it to the sum key and unset the bad key we got ('count(*))*/
                                       } else {

                                           $summery[$temp[0]]['sum'] = $va;
                                           unset($summery[$temp[0]]['count(*)']);
                                       }

                               }
                           }
                       }
                   }
            }
        return $summery;

        }
    }

    public function make_active($table,$post)
    {

        $is_updated = null;
        $active = 0;
        $x=null;
        $product = $this->get_table('view_finder_product_images', null, 'pid', $post['product_id']);
        if (!empty($product['product_images'])) {

            foreach ($product['product_images'] as $val) {

                if ($val['id'] == $post['checked_id']) {
                    $active = 1;
                }else{
                    $active = 0;
                }
                $this->db->where('id', $val['id']);
                $query = $this->db->update($table, array('active' => $active));

                if($query){
                    $x++;
                }
                else{
                    $is_updated = false;
                }
            }
            if($x == count($product['product_images'])){
                $is_updated = true;
            }
        }
        return $is_updated;
    }
}

