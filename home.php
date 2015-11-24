<?php
	include('core/init.php');
	protected_page();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DPM Survey Online</title>
<link rel="stylesheet" href="include/css/uikit.css">
	<script src="include/js/jquery.js"></script>
	<script src="include/js/uikit.js"></script>
</head>

<body>
	<a href='logout.php'>Log Out</a>
	<div name='profile'>
	<h2>Profile</h2>
		<?php profile($user_data);?>
	</div>
	<div name="menu">
		<h2>Menu</h2>
		<ul>
			<li><a href="<?php if(!check_form($session_user_id,'isi_bem')){echo 'form_bem.php';} else{echo '#';}?>">Badan Eksekutif Mahasiswa FMIPA</a>
			<li><a href="<?php if(!check_form($session_user_id,'isi_serum')){echo 'form_serum.php';} else{echo '#';}?>">Serambi Rukhiyah Mahasiswa FMIPA</a>
			<li><a href="<?php if(!check_form($session_user_id,'isi_himpro')){echo 'form_himpro.php';} else{echo '#';}?>"><?php echo himpro($user_data['departemen']);?><a>
			<li><a href='<?php if(!check_form($session_user_id,'isi_sarana')){echo 'form_sarana.php';} else{echo '#';}?>'>Sarana dan Prasarana</a>
			<li><a href='<?php if(!check_form($session_user_id,'isi_pendidikan')){echo 'form_pendidikan.php';} else{echo '#';}?>'>Pendidikan</a>
			<?php
				if($user_data['user_level'] === '1'){
			?>
					<li><a href='print.php'>Print Survey</a>
			<?php
				}
				if(check_submit($session_user_id) === true){
			?>
					<li><a href='claim.php'>Claim Your Reward</a>
			<?php		
				}
			?>
		</ul>
	</div>
	
</body>
</html>
