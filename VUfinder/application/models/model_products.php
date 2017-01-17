<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//class login_model is doing

class Model_products extends CI_Model
    {
        public function get_categories ()
        {

            $categroies = null;

            $sql = 'SELECT * FROM view_finder_categories c LEFT JOIN view_finder_category_images ci ON ci.cid = c.id';

            $query = $this->db->query( $sql );

            if ( $query->num_rows() > 0 ) {

                $categroies = $query->result_array();

            }

            return $categroies;
        }


        public function get_products($category)
		{
			$products = null;
			$sql = 'SELECT p.id prd_id,c.machine_name As cat_machine,c.name,p.* ,img.image
                    FROM view_finder_products p
                    LEFT JOIN view_finder_categories c ON c.id=p.category_id
				    LEFT JOIN view_finder_product_images img ON img.pid=p.id
                    WHERE c.machine_name= ? And p.visibility = 1 AND active=1';
			$query = $this->db->query($sql, array($category));

			if ($query->num_rows() > 0) {

				foreach ($query->result_array() as $key => $val) {

					$products['products'] = $query->result(true);
                    $products['cat_id'] = $products['products'][0]['cat_machine'];
				}
            }
            return $products;
        }

        public  function get_items($products){

            $item = null;

            $sql = 'SELECT c.machine_name As cat_machine, p.*,image.image FROM view_finder_products p
                    LEFT JOIN view_finder_product_images image ON image.pid = p.id
                    LEFT JOIN view_finder_categories as c ON c.id  = p.category_id
                    WHERE p.machine_name = ?
                    AND image.active = 1';

            $query = $this->db->query($sql,array($products));

            if($query->num_rows>0){

                $item = $query->row_array();
                $item['cat_name'] = $item['cat_machine'];

            }

            return $item;

        }


        public function get_specs($id){

            $specs = null;
            $sql  = 'SELECT * FROM view_finder_products_specs WHERE pid = ? ';

            $qeury = $this->db->query($sql,$id);

            if($qeury->num_rows>0){
               foreach( $qeury->result(true) as $key=>$value){
                   $specs = $value;

               };
            }
            return $specs;
        }

    }