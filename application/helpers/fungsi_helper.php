<?php 

function check_already_login(){
	$CI =& get_instance();
	$user_session = $CI->session->userdata('users');
	if($user_session){
		redirect('admin');
	}
}

function check_not_login(){
	$CI =& get_instance();
	$user_session = $CI->session->userdata('users');
	if($user_session){
		redirect('auth/login');
	}
}