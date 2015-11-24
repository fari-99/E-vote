<?php
	function logged_in_redirect(){
		if(logged_in() === true){
			header('Location: home.php');
			exit();
		}
	}
	
	function protected_page(){
		if(logged_in() === false){
			header('Location: login.php');
			exit();
		}
	}

	function array_sanitize(&$item){
		$item = mysql_real_escape_string($item);
	}

	function sanitize($data){
		return mysql_real_escape_string($data);
	}
	
	function output_errors($error){
		return '<ul><li>' . implode('</li><li>', $error ) . '</li></ul>';
	}
	
	function protected_form($id){
		$func_get_args = func_get_args();
		$func_num_args = func_num_args();
		if($func_num_args > 1){
			unset($func_get_args[0]);
			$sql = "SELECT count(`maha_id`) FROM `mahasiswa` WHERE `maha_id` = '$id' and `$func_get_args[1]` = '1'";
			$query = mysql_query($sql);
			$result = mysql_result($query,0);
			if($result === '1'){
				header('location: home.php');
				exit(0);
			}
		}
	}
?>