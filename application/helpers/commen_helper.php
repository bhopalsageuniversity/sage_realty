<?php  
defined('BASEPATH') or exit('No direct script access allowed');

function encrypt_decrypt($action, $string) {
   
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'e9b8b1596fbb58954dfae1fd6baa8dea';
    $secret_iv = 'e9b8b1596fbb58954dfae1fd6baa8dea';
    // hash 
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

	function careers(){
		$CI =& get_instance();
		 $CI->db->select("*");
		 $CI->db->from("career_profile");
		 $CI->db->where('profile_status','1');
		 //$CI->db->order_by("create_date", "desc");
		 $qry = $CI->db->get();
		//  echo $CI->db->last_query();
		return $qry->result_array();    
	 }