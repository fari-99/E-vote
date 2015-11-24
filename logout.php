<?php
	include('core/init.php');
	protected_page();
	session_start();
	session_destroy();
	header("location:login.php");
?>