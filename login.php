<?php
	include('core/init.php');
	error_reporting(0);
	if(empty($_POST) === false){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(empty($username) === true || empty($password) === true){
			$error[] = 'You need to enter a username or password';
		}
		else{
			if(strlen($password) > 32){
				$error[] = 'password is too long';
			}
			$login = login($username, $password);
			if($login === false){
				$error[] = 'That username/password combination is incorrect';
			}
			else{
				//set users session
				$_SESSION['maha_id'] = $login;
				header('location: home.php');
				exit();
				//redirect user to home
			}
		}
		
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="include/css/stylelogin.css">
  <link href="include/css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
  <script src="include/js/jquery-1.10.2.js"></script>
  <script src="include/js/jquery-ui-1.10.4.custom.js"></script>
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<?php
		if(empty($error) === false){
	?>
			<div class="ui-widget">
				<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
					<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
					<strong>Alert:</strong><?php echo output_errors($error);?></p>
				</div>
			</div>
	<?php
		}
	?>
	<section class="container">
		<div class="login">
			  <h1>Login to E-Aspiration</h1>
			  <form action="#" method="post">
				<p><input type="text" name="username" value="" placeholder="Your Username"></p>
				<p><input type="password" name="password" value="" placeholder="Password"></p>
				<p class="submit"><input type="submit" name="commit" value="Login"></p>
			  </form>
		</div>
		<div class="login-help">
		  <p>Powered by Computer Science Department</p>
		</div>
	</section>
</body>
</html>
