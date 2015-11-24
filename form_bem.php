<?php
	include('core/init.php');
	protected_page();
	protected_form($session_user_id,'isi_bem');
	error_reporting(0);
	if($_POST['submit'] === 'submit'){
		if((isset($_POST['spirit'])===false && isset($_POST['psn'])===false && isset($_POST['explo'])===false && isset($_POST['ghealth'])===false && isset($_POST['gaction'])===false && isset($_POST['mgf'])===false && isset($_POST['n20'])===false && isset($_POST['omg'])===false && isset($_POST['gtak'])===false && isset($_POST['icug'])===false && isset($_POST['explo'])===false && isset($_POST['entah'])===false) || empty($_POST['manfaatproker']) === true || isset($_POST['manfaat_psn'])===false || isset($_POST['manfaat_spirit'])===false ||empty($_POST['saran'])=== true || empty($_POST['pesan'])=== true){
			//ganti jadi dialog box
			echo "tolong isi formnya";
		}
		else{
			$id = $session_user_id;
			$manfaat = $_POST['manfaatproker'];
			$manfaat_psn = $_POST['manfaat_psn'];
			$manfaat_spirit = $_POST['manfaat_spirit'];
			$saran = $_POST['saran'];
			$pesan = $_POST['pesan'];
			$data = array();
			$data[0] = $_POST['spirit'];
			$data[1] = $_POST['psn'];
			$data[2] = $_POST['explo'];
			$data[3] = $_POST['ghealth'];
			$data[4] = $_POST['gaction'];
			$data[5] = $_POST['mgf'];
			$data[6] = $_POST['n20'];
			$data[7] = $_POST['omg'];
			$data[8] = $_POST['gtak'];
			$data[9] = $_POST['icug'];
			$data[10] = $_POST['douf'];
			if((isset($_POST['spirit'])===false && isset($_POST['psn'])===false && isset($_POST['explo'])===false && isset($_POST['ghealth'])===false && isset($_POST['gaction'])===false && isset($_POST['mgf'])===false && isset($_POST['n20'])===false && isset($_POST['omg'])===false && isset($_POST['gtak'])===false && isset($_POST['icug'])===false && isset($_POST['explo'])===false) || isset($_POST['entah'])===true){
				$data[11] = $_POST['entah'];
				for ($i = 0; $i<11; $i++)
					$data[$i] = 0;
			}
			$sql = "INSERT INTO `bem`(`maha_id`, 
						`spirit`, `psn`, `explo`, `ghealth`, `gaction`, `mgf`, `n2o`, `omg`, `gtak`, `icug`, `douf`, `entah`,
					`manfaat`, `manfaat_psn`, `manfaat_spirit`, `saran`, `pesan`) VALUES 
					('$session_user_id',
						'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]',
					'$manfaat', '$manfaat_psn','$manfaat_spirit','$saran','$pesan')";
			$query = mysql_query($sql);
			if(!$query){
				//ganti jadi dialog box
				echo "sorry there is a problem with the database";
			}
			else{
				$sql = "UPDATE `mahasiswa` SET `isi_bem`='1' WHERE `maha_id` = '$id'";
				$query = mysql_query($sql);
				if(!$query){
					//ganti jadi dialog box
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
	<h3>FORMULIR BADAN EKSEKUTIF MAHASISWA</h3>
	<ol>
		<li><h3>Apa saja program kerja BEM yang anda ketahui?</h3></li>
			<ul>
				<li><input type="checkbox" name="spirit" value="1" <?php if(isset($_POST['spirit']) === true && $_POST['spirit']=== '1') echo "checked";?>>Spirit</li>
				<li><input type="checkbox" name="psn" value="1" <?php if(isset($_POST['psn'])===true  && $_POST['psn']=== '2') echo "checked";?>>PSN (Pesta Sains Nasional)</li>
				<li><input type="checkbox" name="explo" value="1" <?php if(isset($_POST['explo'])===true && $_POST['explo']=== '3') echo "checked";?>>Explo Sains</li>
				<li><input type="checkbox" name="ghealth" value="1" <?php if(isset($_POST['ghealth'])===true && $_POST['ghealth']=== '4') echo "checked";?>>G-Health</li>
				<li><input type="checkbox" name="gaction" value="1" <?php if(isset($_POST['gaction'])===true && $_POST['gaction']=== '5') echo "checked";?>>Green Action</li>
				<li><input type="checkbox" name="MGF" value="1" <?php if(isset($_POST['mgf'])===true && $_POST['mgf']=== '6') echo "checked";?>>MGF (Mipa Go Field)</li>
				<li><input type="checkbox" name="n2o" value="1" <?php if(isset($_POST['n20'])===true && $_POST['n2o']=== '7') echo "checked";?>>N2O (Magang BEM FMIPA)</li>
				<li><input type="checkbox" name="omg" value="1" <?php if(isset($_POST['omg'])===true && $_POST['omg']=== '8') echo "checked";?>>OMG (Obrolan Mahasiswa FMIPA)</li>
				<li><input type="checkbox" name="gtak" value="1" <?php if(isset($_POST['gtak'])===true && $_POST['gtak']=== '9') echo "checked";?>>G-Tak (G - Media Cetak)</li>
				<li><input type="checkbox" name="icug" value="1" <?php if(isset($_POST['icug'])===true && $_POST['icug']=== '10') echo "checked";?>>ICU-G (Mading and Social Network BEM G)</li>
				<li><input type="checkbox" name="douf" value="1" <?php if(isset($_POST['explo'])===true && $_POST['explo']=== '11') echo "checked";?>>DOUF (Pokja SPP, Gembira, dan Baksos)</li>
				<li><input type="checkbox" name="entah" value="1" <?php if(isset($_POST['entah'])===true && $_POST['entah']=== '12') echo "checked";?>>Tidak Tahu semua</li>
			</ul>
		<li><h3>Apa manfaat program kerja BEM tersebut bagi mahasiswa FMIPA?</h3></li>
			<textarea rows="5" cols="40" name="manfaatproker"><?php if(empty($_POST['manfaatproker']) === false) echo $_POST['manfaatproker'];?></textarea>
		<li><h3>Seberapa bermanfaatkah kegiatan PSN? *</h3>
			<ul>
				<li><input type="radio" name="manfaat_psn" value="5" <?php if(isset($_POST['manfaat_psn'])===true && $_POST['manfaat_psn'] === "5") echo "checked";?>>Sangat Bermanfaat
				<li><input type="radio" name="manfaat_psn" value="4" <?php if(isset($_POST['manfaat_psn'])===true && $_POST['manfaat_psn'] === "4") echo "checked";?>>Lumayan Bermanfaat
				<li><input type="radio" name="manfaat_psn" value="3" <?php if(isset($_POST['manfaat_psn'])===true && $_POST['manfaat_psn'] === "3") echo "checked";?>>Cukup Bermanfaat
				<li><input type="radio" name="manfaat_psn" value="2" <?php if(isset($_POST['manfaat_psn'])===true && $_POST['manfaat_psn'] === "2") echo "checked";?>>Tidak Bermanfaat
				<li><input type="radio" name="manfaat_psn" value="1" <?php if(isset($_POST['manfaat_psn'])===true && $_POST['manfaat_psn'] === "1") echo "checked";?>>Sangat Tidak Bermanfaat
			</ul>
		<li><h3>Seberapa bermanfaatkah kegiatan SPIRIT?</h3>
			<ul>
				<li><input type="radio" name="manfaat_spirit" value="5" <?php if(isset($_POST['manfaat_spirit'])===true && $_POST['manfaat_spirit'] === "5") echo "checked";?>>Sangat Bermanfaat
				<li><input type="radio" name="manfaat_spirit" value="4" <?php if(isset($_POST['manfaat_spirit'])===true && $_POST['manfaat_spirit'] === "4") echo "checked";?>>Lumayan Bermanfaat
				<li><input type="radio" name="manfaat_spirit" value="3" <?php if(isset($_POST['manfaat_spirit'])===true && $_POST['manfaat_spirit'] === "3") echo "checked";?>>Cukup Bermanfaat
				<li><input type="radio" name="manfaat_spirit" value="2" <?php if(isset($_POST['manfaat_spirit'])===true && $_POST['manfaat_spirit'] === "2") echo "checked";?>>Tidak Bermanfaat
				<li><input type="radio" name="manfaat_spirit" value="1" <?php if(isset($_POST['manfaat_spirit'])===true && $_POST['manfaat_spirit'] === "1") echo "checked";?>>Sangat Tidak Bermanfaat
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