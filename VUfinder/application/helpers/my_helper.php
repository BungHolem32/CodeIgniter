<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('die_r')){

    function die_r($val,$live=null,$file=null,$line=null){

        echo  '<pre>';
        print_r($val);
        echo '</pre>';
        if($live){
            echo 'function has not die';
    }
        else{
            die('function has died in file '.$file.'  line '.$line.' , R.I.P');

        }
    }
}


if(!function_exists('hash_him')){

    function hash_him($name){

      return sha1(md5(sha1($name . 'hase-Me Please im not Protected')));
    }
}

if(!function_exists('random_password')) {



function random_password(){

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomPassword = '';
    for ($i=0; $i<10; $i++){

        $randomPassword .= $characters[rand(0,$charactersLength - 1)];
        }

      return $randomPassword;
    }

}

    if(!function_exists('get_url')) {

        function get_url($id,$magic_method)
        {
            $id = get_class($id);
            $method = str_replace($id.'::','',$magic_method);

            if($method == 'index'){

                return  ucfirst($id);
            }
            else{

                return  ucfirst($method);
            }
        }
    }

if( ! function_exists('make_machine_name') ){

	function make_machine_name($str){

		$str = trim($str);
		$str = strtolower($str);
		$str = str_replace(' ', '-', $str);
		return $str;

	}

}

if( !function_exists('item_exist') ){

	function item_exist($id,$cart){

		$item_exist = null;

		if(array_key_exists($id,$cart)){

			$item_exist = true;
		}

		return $item_exist;
	}
}