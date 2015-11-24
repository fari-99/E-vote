<?php
	include('core/init.php');
	protected_page();
	protected_form($session_user_id,'isi_pendidikan');
	error_reporting(0);
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
	<?php
		if(isset($_POST['pel_admin_f']) === false || isset($_POST['pel_admin_d']) === false || isset($_POST['tahu_bea']) === false ||
			(isset($_POST['twitter_bea']) === false && isset($_POST['facebook_bea']) === false && isset($_POST['blog_web_bea']) === false 
				&& ( isset($_POST['lain_bea']) === false ||	empty($_POST['lainnya_bea']) === true)) ||
			isset($_POST['tahu_lomba']) === false || 
			(isset($_POST['twitter_lomba']) === false && isset($_POST['facebook_lomba']) === false && isset($_POST['blog_web_lomba']) === false 
				&& (isset($_POST['lain_lomba']) === false || empty($_POST['lainnya_lomba']) === true)) ||
			empty($_POST['saran']) === true)
		{
			if($_POST['submit'] === 'submit'){
				if(isset($_POST['pel_admin_f']) === false){
					$errors[] = 'tolong isi pertanyaan 1';
				}
				if(isset($_POST['pel_admin_d']) === false){
					$errors[] = 'tolong isi pertanyaan 2';
				}
				if(isset($_POST['tahu_bea']) === false){
					$errors[] = 'tolong isi pertanyaan 3';
				}
				if(isset($_POST['twitter_bea']) === false && isset($_POST['facebook_bea']) === false && isset($_POST['blog_web_bea']) === false && 
					(isset($_POST['lain_bea']) === false || empty($_POST['lainnya_bea']) === true)){
					$errors[] = 'tolong isi pertanyaan 4';
				}
				if(isset($_POST['tahu_bea']) === false){
					$errors[] = 'tolong isi pertanyaan 5';
				}
				if(isset($_POST['twitter_lomba']) === false && isset($_POST['facebook_lomba']) === false && isset($_POST['blog_web_lomba']) === false && 
					(isset($_POST['lain_lomba']) === false || empty($_POST['lainnya_lomba']) === true)){
					$errors[] = 'tolong isi pertanyaan 6';
				}
				if(empty($_POST['saran']) === true){
					$errors[] = 'tolong isi pertanyaan 7';
				}
			}
?>
			<div name="error_message">
			<?php
				if(empty($error)===false){
					echo "<h3>Oops, sepertinya ada beberapa pertanyaan yang belum diisi..</h3>";
					echo output_errors($error);
				}
			?>
			</div>
			<div name="form">
				<form action="#" method="post">
					<ol>
						<li><h3>Seberapa baik pelayanan administrasi di FMIPA menurut anda?</h3>
							<ul>
								<li><input type="radio" name="pel_admin_f" value="1">Sangat Baik
								<li><input type="radio" name="pel_admin_f" value="2">Cukup Baik
								<li><input type="radio" name="pel_admin_f" value="3">Baik
								<li><input type="radio" name="pel_admin_f" value="4">Cukup Buruk
								<li><input type="radio" name="pel_admin_f" value="5">Sangat Buruk
							</ul>
						<li><h3>Seberapa baik pelayanan administrasi di departemen anda?</h3>
							<ul>
								<li><input type="radio" name="pel_admin_d" value="1">Sangat Baik
								<li><input type="radio" name="pel_admin_d" value="2">Cukup Baik
								<li><input type="radio" name="pel_admin_d" value="3">Baik
								<li><input type="radio" name="pel_admin_d" value="4">Cukup Buruk
								<li><input type="radio" name="pel_admin_d" value="5">Sangat Buruk
							</ul>
						<li><h3>Apakah anda selalu mengetahui informasi mengenai beasiswa?</h3>
							<ul>
								<li><input type="radio" name="tahu_bea" value="1">Ya
								<li><input type="radio" name="tahu_bea" value="2">Cukup tahu
								<li><input type="radio" name="tahu_bea" value="3">Kurang tahu / Tidak sama sekali
							</ul>
						<li><h3>Melalui media apa anda mengetahui informasi beasiswa?</h3>
							<ul>
								<li><input type="checkbox" name="twitter_bea" value="1">Twitter
								<li><input type="checkbox" name="facebook_bea" value="1">Facebook
								<li><input type="checkbox" name="blog_web_bea" value="1">Website/Blog
								<li><input type="checkbox" name="mading_bea" value="1">Mading (Majalah Dinding)
								<li><input type="checkbox" name="lain_bea" value="1">Yang lain :
									<br><textarea name="lainnya_bea" rows="0" cols="10"></textarea>
							</ul>
						<li><h3>Apakah anda selalu mengetahui informasi mengenai perlombaan dan Mahasiswa Berprestasi (Mapres) ?</h3>
							<ul>
								<li><input type="radio" name="tahu_lomba" value="1">Ya
								<li><input type="radio" name="tahu_lomba" value="2">Cukup tahu
								<li><input type="radio" name="tahu_lomba" value="3">Kurang tahu / Tidak sama sekali
							</ul>
						<li><h3>Melalui media apa anda mengetahui informasi tersebut?</h3>
							<ul>
								<li><input type="checkbox" name="twitter_lomba" value="1">Twitter
								<li><input type="checkbox" name="facebook_lomba" value="1">Facebook
								<li><input type="checkbox" name="blog_web_lomba" value="1">Website/Blog
								<li><input type="checkbox" name="mading_lomba" value="1">Mading (Majalah Dinding)
								<li><input type="checkbox" name="lain_lomba" value="1">Yang lain :
									<br><textarea name="lainnya_lomba" rows="0" cols="10"></textarea>
							</ul>
						<li><h3>Saran anda untuk kemajuan pelayanan pendidikan di FMIPA dan Departemen anda?</h3>
							<textarea name="saran" rows="5" cols="20"></textarea>
					</ol>
					<input type="submit" name="submit" value="submit">
				</form>
			</div>
<?php		
		}
		else{
			$pel_admin_f = $_POST['pel_admin_f'];
			$pel_admin_d = $_POST['pel_admin_d'];
			$tahu_bea = $_POST['tahu_bea'];
			$twitter_bea = $_POST['twitter_bea'];
			$facebook_bea = $_POST['facebook_bea'];
			$blog_web_bea = $_POST['blog_web_bea'];
			$lain_bea = $_POST['lain_bea'];
			$lainnya_bea = $_POST['lainnya_bea'];
			$tahu_lomba = $_POST['tahu_lomba'];
			$twitter_lomba = $_POST['twitter_lomba'];
			$facebook_lomba = $_POST['facebook_lomba'];
			$blog_web_lomba = $_POST['blog_web_lomba'];
			$lain_lomba = $_POST['lain_lomba'];
			$lainnya_lomba = $_POST['lainnya_lomba'];
			$saran = $_POST['saran'];
			$id = $session_user_id;
			$no_dep = no_dep($user_data['departemen']);
			
			$sql = "INSERT INTO `pendidikan`(`maha_id`,`no_dep`, `pel_admin_f`, `pel_admin_d`, `tahu_bea`, `twitter_bea`, `facebook_bea`, `blog_web_bea`, `lain_bea`, `lainnya_bea`, `tahu_lomba`, `twitter_lomba`, `facebook_lomba`, `blog_web_lomba`, `lain_lomba`, `lainnya_lomba`, `saran`) 
			VALUES ('$id','$no_dep', '$pel_admin_f', '$pel_admin_d', '$tahu_bea', '$twitter_bea', '$facebook_bea', '$blog_web_bea','$lain_bea', '$lainnya_bea', '$tahu_lomba', '$twitter_lomba', '$facebook_lomba', '$blog_web_lomba','$lain_lomba', '$lainnya_lomba', '$saran')";
			
			$query = mysql_query($sql);
			$result = mysql_result($query,0);
			if(!$result === true){
				echo "sorry, there is a problem, please try again later";
			}
			else{
				$sql = "update `mahasiswa` set `isi_pendidikan` = '1' where `maha_id` = '$session_user_id'";
				$query = mysql_query($sql);
				if(!$query){
					echo "sorry there is a problem, please reload";
					//die();
				}
				else{
					header('location:home.php');
				}
			}
		}
	?>
	<div name="error_message">
		<?php
			if(empty($error)===false){
				echo output_errors($error);
			}
		?>
	</div>
</body>
</html>