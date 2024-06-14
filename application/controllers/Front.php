<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
 function __construct(){
	  parent::__construct();
	   $this->load->database();
	   $this->load->model('Front_model');
	   
	  
	  
	}
	public function index()
	{
	    $data['title']='index';
	    $this->load->view('common/header',$data);
	
	    $this->load->view('index',$data);
		$this->load->view('common/footer');
	}
	
	public function about()
	{
	    $data['title']='About Us';
	    $this->load->view('common/header',$data);
	  
	    $this->load->view('front_page/about',$data);
		$this->load->view('common/footer');
	}
	
    // public function blog()
	// {
	//    $data['title']='Blogs';
    //     $this->load->view('common/header',$data);
	//     $this->load->view('common/menu');
	//     $this->load->view('front_page/blog',$data);
	// 	$this->load->view('common/footer');
	// }
	//     public function blog_single()
	// {
	//    $data['title']='Blogs Single';
    //      $this->load->view('common/header',$data);
	//     $this->load->view('common/menu');
	//     $this->load->view('front_page/blog_single',$data);
	// 	$this->load->view('common/footer');
	// }
	
	// public function contact()
	// {
	//     $data['title']='Contact us';
	//     $this->load->view('common/header',$data);
	//     $this->load->view('common/menu');
	//     $this->load->view('front_page/contact',$data);
	// 	$this->load->view('common/footer');
	// }
	


}
