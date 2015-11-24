<?php 
	session_start();
	//error reporting(0);
	require('core/database/connect.php');
	require('core/function/user.php');
	require('core/function/general.php');
	
	if(logged_in() === true){
		$session_user_id = $_SESSION['maha_id'];
		$user_data = user_data($session_user_id,'username','nama','nim','departemen','user_level','isi_bem','isi_serum','isi_himpro','isi_pendidikan','isi_sarana');
		//make sure what you want to use of your parameter
		//print_r($user_data); //debugging
	}
	$error = array();
	$errors = array();
?>