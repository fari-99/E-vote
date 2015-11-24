<?php
	include('core/init.php');
	protected_page();
	protected_form($session_user_id,'isi_serum');
	error_reporting(0);
	if($_POST['submit'] === 'submit'){
		if((isset($_POST['fim'])===false && isset($_POST['biskuit'])===false && isset($_POST['forsiar'])===false && isset($_POST['bbq'])===false && isset($_POST['kimci'])===false && isset($_POST['entah'])===false) || empty($_POST['manfaatproker']) === true || isset($_POST['manfaat_fim'])===false || isset($_POST['manfaat_biskuit'])===false ||empty($_POST['saran'])=== true || empty($_POST['pesan'])=== true){
			//ganti jadi dialog box
			echo "tolong isi formnya";
		}
		else{
			$id = $session_user_id;
			$manfaat = $_POST['manfaatproker'];
			$manfaat_fim = $_POST['manfaat_fim'];
			$manfaat_biskuit = $_POST['manfaat_biskuit'];
			$saran = $_POST['saran'];
			$pesan = $_POST['pesan'];
			$data = array();
			$data[0] = $_POST['fim'];
			$data[1] = $_POST['biskuit'];
			$data[2] = $_POST['forsiar'];
			$data[3] = $_POST['bbq'];
			$data[4] = $_POST['kimci'];
			if((isset($_POST['fim'])===false && isset($_POST['biskuit'])===false && isset($_POST['forsiar'])===false && isset($_POST['bbq'])===false && isset($_POST['kimci'])===false) || isset($_POST['entah']) === true)){
				$data[5] = $_POST['entah'];
				for ($i = 0; $i<5; $i++)
					$data[$i] = 0;
				//ada dialog boks buat nampilin error
			}
			$program = implode(',',$data);
			$sql = "INSERT INTO `serum`(`maha_id`, 
						`fim`, `biskuit`, `forsiar`, `bbq`, `kimci`, `entah`,
					`manfaat`, `manfaat_fim`, `manfaat_biskuit`, `saran`, `pesan`) VALUES ('$session_user_id',
						'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]',
					'$manfaat', '$manfaat_fim','$manfaat_biskuit','$saran','$pesan')";
			$query = mysql_query($sql);
			if(!$query){
				//ganti jadi dialog box
				echo "sorry there is a problem with the database";
			}
			else{
				$sql = "UPDATE `mahasiswa` SET `isi_serum`='1' WHERE `maha_id` = '$id'";
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
	<h3>FORMULIR SERUM</h3>
	<ol>
		<li><h3>Apa saja program kerja BEM yang anda ketahui?</h3></li>
			<ul>
				<li><input type="checkbox" name="fim" value="1" <?php if(isset($_POST['fim']) === true && $_POST['fim']=== '1') echo "checked";?>>FIM (Festival Ilmuwan Muslim)</li>
				<li><input type="checkbox" name="biskuit" value="1" <?php if(isset($_POST['biskuit'])===true  && $_POST['biskuit']=== '2') echo "checked";?>>BISKUIT (Bincang Asik, Berkualitas, dan Inspiratif)</li>
				<li><input type="checkbox" name="forsiar" value="1" <?php if(isset($_POST['forsiar'])===true && $_POST['forsiar']=== '3') echo "checked";?>>FORSIAR (Forum Silaturahim Rohis MIPA)</li>
				<li><input type="checkbox" name="bbq" value="1" <?php if(isset($_POST['bbq'])===true && $_POST['bbq']=== '4') echo "checked";?>>BBQ (Bina Baca Al-Qur'an)</li>
				<li><input type="checkbox" name="kimci" value="1" <?php if(isset($_POST['kimci'])===true && $_POST['kimci']=== '5') echo "checked";?>>KIMCI (Kajian Muslimah Ceria dan Aktif)</li>
				<li><input type="checkbox" name="entah" value="1" <?php if(isset($_POST['entah'])===true && $_POST['entah']=== '6') echo "checked";?>>Tidak Tahu semua</li>
			</ul>
		<li><h3>Apa manfaat program kerja BEM tersebut bagi mahasiswa FMIPA?</h3></li>
			<textarea rows="5" cols="40" name="manfaatproker"><?php if(empty($_POST['manfaatproker']) === false) echo $_POST['manfaatproker'];?></textarea>
		<li><h3>Seberapa bermanfaatkah kegiatan FIM? *</h3>
			<ul>
				<li><input type="radio" name="manfaat_fim" value="5" <?php if(isset($_POST['manfaat_fim'])===true && $_POST['manfaat_fim'] === "5") echo "checked";?>>Sangat Bermanfaat
				<li><input type="radio" name="manfaat_fim" value="4" <?php if(isset($_POST['manfaat_fim'])===true && $_POST['manfaat_fim'] === "4") echo "checked";?>>Lumayan Bermanfaat
				<li><input type="radio" name="manfaat_fim" value="3" <?php if(isset($_POST['manfaat_fim'])===true && $_POST['manfaat_fim'] === "3") echo "checked";?>>Cukup Bermanfaat
				<li><input type="radio" name="manfaat_fim" value="2" <?php if(isset($_POST['manfaat_fim'])===true && $_POST['manfaat_fim'] === "2") echo "checked";?>>Tidak Bermanfaat
				<li><input type="radio" name="manfaat_fim" value="1" <?php if(isset($_POST['manfaat_fim'])===true && $_POST['manfaat_fim'] === "1") echo "checked";?>>Sangat Tidak Bermanfaat
			</ul>
		<li><h3>Seberapa bermanfaatkah kegiatan BISKUIT?</h3>
			<ul>
				<li><input type="radio" name="manfaat_biskuit" value="5" <?php if(isset($_POST['manfaat_biskuit'])===true && $_POST['manfaat_biskuit'] === "5") echo "checked";?>>Sangat Bermanfaat
				<li><input type="radio" name="manfaat_biskuit" value="4" <?php if(isset($_POST['manfaat_biskuit'])===true && $_POST['manfaat_biskuit'] === "4") echo "checked";?>>Lumayan Bermanfaat
				<li><input type="radio" name="manfaat_biskuit" value="3" <?php if(isset($_POST['manfaat_biskuit'])===true && $_POST['manfaat_biskuit'] === "3") echo "checked";?>>Cukup Bermanfaat
				<li><input type="radio" name="manfaat_biskuit" value="2" <?php if(isset($_POST['manfaat_biskuit'])===true && $_POST['manfaat_biskuit'] === "2") echo "checked";?>>Tidak Bermanfaat
				<li><input type="radio" name="manfaat_biskuit" value="1" <?php if(isset($_POST['manfaat_biskuit'])===true && $_POST['manfaat_biskuit'] === "1") echo "checked";?>>Sangat Tidak Bermanfaat
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