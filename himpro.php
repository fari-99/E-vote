<?php
	include('core/init.php');
	protected_page();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DPM Survey Online</title>
</head>

<body>
	<a href='logout.php'>Log Out</a>
	<div name='profile'>
	<h2>Profile</h2>
		<?php profile($user_data);?>
	</div>
	<div name="menu">
		<ul>
			<li><a href="<?php if(!check_form($session_user_id,'isi_bem')){echo 'form_bem.php';} else{echo '#';}?>">Badan Eksekutif Mahasiswa FMIPA</a>
			<li><a href="<?php if(!check_form($session_user_id,'isi_serum')){echo 'form_serum.php';} else{echo '#';}?>">Serambi Rukhiyah Mahasiswa FMIPA</a>
			<li><a href="<?php if(!check_form($session_user_id,'isi_himpro')){echo 'form_himpro.php';} else{echo '#';}?>"><?php echo himpro($user_data['departemen']);?><a>
		</ul>
	</div>
	
</body>
</html>