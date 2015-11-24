<?php
	$connect_error = 'Sorry, database can\'t connect now, please do it later';
	
	$sql = mysql_connect('localhost','root','');
	
	if(!$sql){
		die($connect_error);
	}
	else{
		$sql = mysql_select_db('survey');
		
		if(!$sql){
			die($connect_error);
		}
	}

?>