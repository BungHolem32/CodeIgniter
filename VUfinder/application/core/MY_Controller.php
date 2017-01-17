<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property array smarty_properties
 * @property  my_smarty
 */
class MY_Controller extends CI_Controller
{
    public $data = array('title'=>'Home');

    public function __construct()
    {
        parent::__construct();

        //assign is login if session has uid value;
        $this->data[ 'is_login' ] = ( $this->session->userdata( 'uid' ) == true ) ? true : false;
        //assign is admin if session has admin value;
        $this->data[ 'is_admin' ] = ( $this->session->userdata( 'admin' ) == true ) ? true : false;


//       //==============================smarty layout configuration======================================================
            $this->smarty_properties = [
                'title'=>'Home Page'
                ,'data'=>$this->data
                ,'cart'=>$this->cart
                ,'session'=>$this->session->all_userdata()
                ,'site_name'=>$_SERVER['SERVER_NAME']
                ,'year'=>date('Y')
                ,'uri_site3' => $this->uri->segment(3,0)
                ,'uri_site5' => $this->uri->segment(5,0)
        ];

        $this->my_smarty->assign('main',$this->smarty_properties);

      /*  //==============================on load run the model boot to upload the new menu and content==================
        $this->load->model('model_boot');
        $menu = $this->model_boot->getMenu();

        //============================if there menu value parseIt======================================================
        if($menu){
           $this->smarty_properties['menu'] = $menu;

        }*/
    }
}
