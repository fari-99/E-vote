<?php
	include('core/init.php');
	protected_page();
	protected_form($session_user_id,'isi_himpro');
	error_reporting(0);
	if($_POST['submit'] === 'submit'){
		if(empty($_POST['manfaatproker']) === true || isset($_POST['dukung'])=== false || empty($_POST['saran'])===true || empty($_POST['pesan'])=== true){
			echo "tolong isi formnya";
		}
		else{
			$himpro = himpro($user_data['departemen']);
			$departemen = $user_data['departemen'];
			$no_dep = no_dep($departemen);
			$id = $session_user_id;
				if(empty($_POST['proker'])===false) $tahu_proker = '1';
			$manfaat_proker = $_POST['manfaatproker'];
			$dukung = $_POST['dukung'];
			$saran = $_POST['saran'];
			$pesan = $_POST['pesan'];			
			$sql = "INSERT INTO `himpro`(`maha_id`, `proker`,`tahu_proker`, `manfaat_proker`, `dukung`, `saran`, `pesan`,`no_dep`) VALUES ('$session_user_id','$proker','$tahu_proker','$manfaat_proker','$dukung','$saran','$pesan','$no_dep')";
			$query = mysql_query($sql);
			if(!$query){
				echo "sorry there is a problem with the database";
			}
			else{
				$sql = "UPDATE `mahasiswa` SET `isi_himpro`='1' WHERE `maha_id` = '$id'";
				$query = mysql_query($sql);
				if(!$query){
					echo "sorry there is a problem with the database";
				}
				else{
					header('location:home.php');
					exit(0);
				}
			}
		}
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DPM Survey Online</title>
<link rel="stylesheet" href="include/css/uikit.css">
	<script src="include/js/jquery.js"></script>
	<script src="include/js/uikit.js"></script>
</head>

<body>
<form action="#" method="post">
	<h3>FORMULIR HIMPUNAN PROFESI DEPARTEMEN (<?php echo $user_data['departemen'];?>)</h3>
	<ol>
		<li><h3>Apa saja program kerja <?php echo himpro($user_data['departemen']);?> yang anda ketahui?</h3></li>
			<textarea rows="5" cols="40" name="proker"><?php if(empty($_POST['proker']) === false) echo $_POST['proker'];?></textarea>
		<li><h3>Apa manfaat program kerja <?php echo himpro($user_data['departemen']);?> tersebut bagi mahasiswa FMIPA?</h3></li>
			<textarea rows="5" cols="40" name="manfaatproker"><?php if(empty($_POST['manfaatproker']) === false) echo $_POST['manfaatproker'];?></textarea>
		<li><h3>Apakah kegiatan-kegiatan himpro sudah mendukung minat anda? *</h3>
			<ul>
				<li><input type="radio" name="dukung" value="5" <?php if(isset($_POST['dukung'])===true && $_POST['dukung'] === "5") echo "checked";?>>Sangat Bermanfaat
				<li><input type="radio" name="dukung" value="4" <?php if(isset($_POST['dukung'])===true && $_POST['dukung'] === "4") echo "checked";?>>Lumayan Bermanfaat
				<li><input type="radio" name="dukung" value="3" <?php if(isset($_POST['dukung'])===true && $_POST['dukung'] === "3") echo "checked";?>>Cukup Bermanfaat
				<li><input type="radio" name="dukung" value="2" <?php if(isset($_POST['dukung'])===true && $_POST['dukung'] === "2") echo "checked";?>>Tidak Bermanfaat
				<li><input type="radio" name="dukung" value="1" <?php if(isset($_POST['dukung'])===true && $_POST['dukung'] === "1") echo "checked";?>>Sangat Tidak Bermanfaat
			</ul>
		<li><h3>Saran Anda terhadap kinerja dan program kerja BEM?</h3>
			<ul>
				<h4>Saran</h4>
					<textarea name="saran" cols="40" rows="5"><?php if(empty($_POST['saran'])===false) echo $_POST['saran']?></textarea>
					<br><span>use semicolon (;) to separete entries.</span>
				<h4>Pesan</h4>
					<textarea name="pesan" cols="40" rows="5"><?php if(empty($_POST['pesan'])===false) echo $_POST['pesan']?></textarea>
					<br><span>use semicolon (;) to separete entries.</span>
			</ul>
	</ol>
		<input type="submit" name="submit" value="submit">
</form>
</body>
</html>