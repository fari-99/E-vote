<?php
	include('core/init.php');
	protected_page();
	error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DPM Survey Online</title>
</head>

<body>
	<?php 
		if((isset($_POST['bem']) === false && isset($_POST['serum'])=== false && isset($_POST['himpro']) === false
			&& isset($_POST['sarana']) === false && isset($_POST['pendidikan'])=== false && isset($_POST['all']) === false) || $_POST['form_2'] === 'kembali'){
			$bem = $_POST['bem'];
			$serum = $_POST['serum'];
			$himpro = $_POST['himpro'];
			$sarana	= $_POST['sarana'];
			$pendidikan = $_POST['pendidikan'];
			$all = $_POST['all'];
	?>
			<form name="form_1" action="#" method="post">
				<ul>
					<li><h3>Apa saja yang ingin anda masukkan ke document print?*</h3>
						<ul>
							<li><input type="checkbox" name="all" value="1" <?php if(isset($all) === true) echo "checked";?>>All
							<li><input type="checkbox" name="bem" value="1" <?php if(isset($bem) === true) echo "checked";?>>Badan Eksekutif Mahasiswa FMIPA
							<li><input type="checkbox" name="serum" value="1" <?php if(isset($serum) === true) echo "checked";?>>Serambi Rukhiyah Mahasiswa FMIPA
							<li><input type="checkbox" name="himpro" value="1" <?php if(isset($himpro) === true) echo "checked";?>>Himpunan Profesi FMIPA
							<li><input type="checkbox" name="sarana" value="1" <?php if(isset($sarana) === true) echo "checked";?>>Sarana dan Prasarana
							<li><input type="checkbox" name="pendidikan" value="1" <?php if(isset($pendidikan) === true) echo "checked";?>>Pendidikan
						</ul>
				</ul>
				<input type="submit" name="lanjutkan1" value="submit">
			</form>	
	<?php
		}
		else{
			
			$bem = $_POST['bem'];
			$serum = $_POST['serum'];
			$himpro = $_POST['himpro'];
			$sarana	= $_POST['sarana'];
			$pendidikan = $_POST['pendidikan'];
			$all = $_POST['all'];
	?>		
			<form action="template_print.php" method="post">
				<ol>
	<?php		
					if($bem === '1' || $all === '1'){
	?>				
						<li><h3>Badan Eksekutif Mahasiswa</h3>
						<ul>
							<li><input type="checkbox" name="all1" value="1">All
							<li><input type="checkbox" name="tahu_programbem" value="1">Pengetahuan mahasiswa tentang program-program bem
							<li><input type="checkbox" name="manfaat_psn" value="1">Manfaat program PSN
							<li><input type="checkbox" name="manfaat_spirit" value="1">Manfaat program SPIRIT
						</ul>
	<?php
					}
					if($serum === '1' || $all === '1'){
	?>					<li><h3>Serambi Rukhiyah Mahasiswa FMIPA</h3>
						<ul>
							<li><input type="checkbox" name="all2" value="1">All
							<li><input type="checkbox" name="tahu_programserum" value="1">Pengetahuan mahasiswa tentang program-program SERUM-G
							<li><input type="checkbox" name="manfaat_fim" value="1">Manfaat program FIM
							<li><input type="checkbox" name="manfaat_biskuit" value="1">Manfaat program BISKUIT
						</ul>
	<?php			}
					if($himpro === '1' || $all === '1'){
	?>					
						<li><h3>Himpunan Profesi</h3>
							<ul>
								<h4>Tolong pilih departemen yang anda inginkan. *</h4>
								<ul>
									<li><input type="checkbox" name="all3" value="1">All
									<li><input type="checkbox" name="stats1"  value="1">Statistika
									<li><input type="checkbox" name="gfm1"  value="1">GeoFisika dan Meteorologi
									<li><input type="checkbox" name="bio1"  value="1">Biologi
									<li><input type="checkbox" name="kimia1"  value="1">Kimia
									<li><input type="checkbox" name="mtk1"  value="1">Matematika
									<li><input type="checkbox" name="ilkom1"  value="1">Ilmu Komputer
									<li><input type="checkbox" name="fis1"  value="1">Fisika
									<li><input type="checkbox" name="biok1"  value="1">Biokimia
								</ul>
								<h4>Tolong pilih apa yang ingin anda masukkan ke document.*</h4>
								<ul>
									<li><input type="checkbox" name="all4" value="1">All
									<li><input type="checkbox" name="tahu_programhimpro" value="1">Pengetahuan mahasiswa tentang program Himpro
									<li><input type="checkbox" name="manfaat_programhimpro" value="1">Manfaat program Himpro
								</ul>
							</ul>
	<?php			}
					if($sarana === '1' || $all === '1'){
	?>				
						<li><h3>Sarana dan Prasarana</h3>
							<ul>
								<li><input type="checkbox" name="all5" value="1">All
								<li><input type="checkbox" name="fasilitas_madai" value="1">Apakah fasislitas FMIPA sudah memadai?
								<li><input type="checkbox" name="fasilitas_krg_madai" value="1">pa saja fasilitas yang kurang memadai?
							</ul>
	<?php			}
					if($pendidikan === '1' || $all === '1'){
	?>
						<li><h3>Pendidikan</h3>
							<h4>Tolong pilih apa yang ingin anda masukkan ke document.*</h4>
							<ul>
								<li><input type="checkbox" name="all7" value="1">All
								<li><input type="checkbox" name="pel_admin_f" value="1">Seberapa baik pelayanan administrasi FMIPA
								<li><input type="checkbox" name="pel_admin_d" value="1">Seberapa baik pelayanan administrasi Departemen
								<li><input type="checkbox" name="tahu_bea" value="1">Mahasiswa mengetahui informasi beasiswa
								<li><input type="checkbox" name="tahu_lomba" value="1">Mahasiswa mengetahui informasi lomba
								<li><input type="checkbox" name="media_bea" value="1">Media mahasiswa mengetahui informasi beasiswa
								<li><input type="checkbox" name="media_lomba" value="1">Media mahasiswa mengetahui informasi lomba
							</ul>
	<?php			}
	?>		
				</ol>
				<input type="hidden" name="bem" value="<?php echo $bem;?>">
				<input type="hidden" name="serum" value="<?php echo $serum;?>">
				<input type="hidden" name="himpro" value="<?php echo $himpro;?>">
				<input type="hidden" name="sarana" value="<?php echo $sarana;?>">
				<input type="hidden" name="pendidikan" value="<?php echo $pendidikan;?>">
				<input type="submit" name="form_2" value="kembali">
				<input type="submit" name="lanjutkan2" value="submit">
			</form>
	<?php
		}
	?>
</body>
</html>