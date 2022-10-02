<?php 

     Class Fungsi()

     protected $CI;

     function __construct(){

     	$this->CI =& get_instance();

     }

     function user_login(){
     	$this->CI->load->model('auth/Login_model');
     	$user id = $this->CI->session->userdata('');
     	$user_data = $this->CI->login_model->_get('users');
     	return $user_data;
     }

     }