<?php 

class Front_model extends CI_Model
{
  
  public function __Construct(){
         parent::__Construct();
           $this->load->helper('string');
     }



   public function getcareer(){
        $this->db->select("*");
        $this->db->from("career_profile");
        $where = "profile_status='1'";
        $this->db->where($where);
        $this->db->order_by('id');
        $qry = $this->db->get();
        return $qry->result_array();
               
    }


   
}