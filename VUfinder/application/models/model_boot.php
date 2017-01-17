<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Model_boot extends CI_Model{

        public function getMenu(){

            $menu = null;

            $query = $this->db->get('view_finder_menu');

            if($query->num_rows() > 0){

                $menu['menu'] = $query->result(true);
            }
            return $menu['menu'];
        }

        public function getContent($page){

            $content = null;

            $sql = "SELECT m.title menu_title,c.title,c.article FROM view_finder_content c
            JOIN view_finder_menu m ON m.id = c.menu_id
            WHERE m.machine_name = ?";

            $query = $this->db->query($sql, array($page));

            if($query->num_rows() > 0){

                $content['content'] = $query->result_array();
            }
            return $content;
        }
    }