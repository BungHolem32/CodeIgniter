<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class model_search extends CI_Model {

    public function get_by_key($val){

        $data = null;

        $sql = "SELECT * FROM view_finder_products p
                JOIN view_finder_product_images img ON img.pid = p.id
                WHERE p.name LIKE CONCAT('%',?,'%') ORDER BY p.name ASC ";
        $query = $this->db->query($sql, array($val));

        if($query->num_rows()>0){

            $data = $query->result(true);
        }
        return $data;
    }


}