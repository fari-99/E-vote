<?php
include('include/PDF/default/class.ezpdf.php');
include('core/init.php');
include('core/function/print.php');
error_reporting(0);

$data = array();
$data[0] = $_POST['all'];
$data[1] = $_POST['bem'];
$data[2] = $_POST['serum'];
$data[3] = $_POST['himpro'];
$data[4] = $_POST['sarana'];
$data[5] = $_POST['pendidikan'];

$proker_bem = array();
$proker_bem[] = "spirit";
$proker_bem[] = "psn";
$proker_bem[] = "explo";
$proker_bem[] = "ghealth";
$proker_bem[] = "gaction";
$proker_bem[] = "mgf";
$proker_bem[] = "n2o";
$proker_bem[] = "omg";
$proker_bem[] = "gtak";
$proker_bem[] = "icug";
$proker_bem[] = "douf";
$proker_bem[] = "entah";

$proker_serum = array();
$proker_serum[] = "fim";
$proker_serum[] = "biskuit";
$proker_serum[] = "forsiar";
$proker_serum[] = "bbq";
$proker_serum[] = "kimci";
$proker_serum[] = "entah";

$manfaat = array();
$manfaat[] = "Sangat";
$manfaat[] = "Lumayan";
$manfaat[] = "Cukup";
$manfaat[] = "Tidak";
$manfaat[] = "Sangat Tidak";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="include/css/uikit.css">
<script src="include/js/jquery.js"></script>
<script src="include/js/uikit.js"></script>
<script type="text/javascript" src="include/js/jscharts.js"></script>
<title>DPM Survey Online</title>
</head>

<body>
<?php
//=================BEM===================
if($data[0] === '1' || $data[1] === '1'){
	$bem = array();
	$bem[0] = $_POST['all1'];
	$bem[1] = $_POST['tahu_programbem'];
	$bem[2] = $_POST['manfaat_psn'];
	$bem[3] = $_POST['manfaat_spirit'];
	echo "<h2>Data Survey BEM</h2>";
	
	if($bem[0] === '1' || $bem[1] === '1'){
		//yang tahu
		$sql = array();
		$query = array();
		for($i = 0; $i<12; $i++){ 
			$sql[$i] = "select count(`maha_id`) from `bem` where `$proker_bem[$i]` = '1'";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		//yang tidak tahu
		for($j = 0,$i = 12; $i<24; $j++,$i++){ 
			$sql[$i] = "select count(`maha_id`) from `bem` where `$proker_bem[$j]` = '0'";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		$value = "";
		for($j= 12,$i = 0; $i<12; $i++,$j++){
			$value .= "['" . strtoupper($proker_bem[$i]) . "'," . $query[$i][0] . "," . $query[$j][0] . "]";
			if($i !== 11) $value .= ",";
		}
		$title = "'Pengetahuan Mahasiswa FMIPA Tentang Proker BEM'";
		print_chart_bem_1($value,$title);
	}
	if($bem[0] === '1' || $bem[2] === '1'){
		$sql = array();
		$query = array();
		
		for($j = 1,$i = 0; $i<5; $j++,$i++){
			$sql[$i] = "select count(`maha_id`) from `bem` where `manfaat_psn` = '$j'";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		$value = "";
		for($i = 0; $i<5; $j++,$i++){
			$value .= "['" . $manfaat[$i] . "'," . $query[$i][0] . "]";
			if($i !== 4) $value .= ",";
		}
		$title = "'Manfaat PSN bagi Mahasiswa FMIPA'";
		print_chart_bem_2($value,$title);
	}
	if($bem[0] === '1' || $bem[3] === '1'){
		$sql = array();
		$query = array();
		for($j = 1,$i = 0; $i<5;$j++,$i++){
			$sql[$i] = "select count(`maha_id`) from `bem` where `manfaat_spirit` = '$j'";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		$value ="";
		for($i = 0; $i < 5;$i++){
			$value .= "['" . $manfaat[$i] . "'," . $query[$i][0] . "]";
			if($i !== 4) $value .= ",";
		}
		$title = "'Manfaat SPIRIT bagi Mahasiswa FMIPA'";
		print_chart_bem_3($value,$title);
	}
}
//=================SERUM===================
if($data[0] === '1' || $data[2] === '1'){
	$serum = array();
	$serum[0] = $_POST['all2'];
	$serum[1] = $_POST['tahu_programserum'];
	$serum[2] = $_POST['manfaat_fim'];
	$serum[3] = $_POST['manfaat_biskuit'];
	echo "<h2>Data Survey serum</h2>";
	
	if($serum[0] === '1' || $serum[1] === '1'){
		//yang tahu
		$sql = array();
		$query = array();
		for($i = 0; $i<5; $i++){ 
			$sql[$i] = "select count(`maha_id`) from `serum` where `$proker_serum[$i]` = '1'";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		//yang tidak tahu
		for($j = 0,$i = 5; $i<10; $j++,$i++){ 
			$sql[$i] = "select count(`maha_id`) from `serum` where `$proker_serum[$j]` = '0'";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		$value = "";
		for($j= 5,$i = 0; $i<5; $i++,$j++){
			$value .= "['" . strtoupper($proker_serum[$i]) . "'," . $query[$i][0] . "," . $query[$j][0] . "]";
			if($i !== 4) $value .= ",";
		}
		$title = "'Pengetahuan Mahasiswa FMIPA Tentang Proker SERUM'";
		//die($value);
		print_chart_serum_1($value,$title);
	}
	if($serum[0] === '1' || $serum[2] === '1'){
		$sql = array();
		$query = array();
		
		for($j = 1,$i = 0; $i<5; $j++,$i++){
			$sql[$i] = "select count(`maha_id`) from `serum` where `manfaat_fim` = '$j'";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		$value = "";
		for($i = 0; $i<5; $j++,$i++){
			$value .= "['" . $manfaat[$i] . "'," . $query[$i][0] . "]";
			if($i !== 4) $value .= ",";
		}
		$title = "'Manfaat FIM bagi Mahasiswa FMIPA'";
		//die($value);
		print_chart_serum_2($value,$title);
	}
	if($serum[0] === '1' || $serum[3] === '1'){
		$sql = array();
		$query = array();
		for($j = 1,$i = 0; $i<5;$j++,$i++){
			$sql[$i] = "select count(`maha_id`) from `serum` where `manfaat_biskuit` = '$j'";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		$value ="";
		for($i = 0; $i < 5;$i++){
			$value .= "['" . $manfaat[$i] . "'," . $query[$i][0] . "]";
			if($i !== 4) $value .= ",";
		}
		$title = "'Manfaat BISKUIT bagi Mahasiswa FMIPA'";
		//die($value);
		print_chart_serum_3($value,$title);
	}
}
//=================HIMPRO===================
if($data[0] === '1' || $data[3] === '1'){
	$himpro = array();
	$himpro[] = $_POST['all3'];
	$himpro[] = $_POST['stats1'];
	$himpro[] = $_POST['gfm1'];
	$himpro[] = $_POST['bio1'];
	$himpro[] = $_POST['mtk1'];
	$himpro[] = $_POST['kimia1'];
	$himpro[] = $_POST['ilkom1'];
	$himpro[] = $_POST['fis1'];
	$himpro[] = $_POST['biok1'];
	$himpro[] = $_POST['all4'];
	$himpro[] = $_POST['tahu_programhimpro'];
	$himpro[] = $_POST['manfaat_programhimpro'];
	
	echo "<h2>Data Survey HIMPRO FMIPA</h2>";
	
	$sql1 = array(); //untuk yang tahu
	$query1 = array();
	$sql2 = array(); //untuk yang tidak tahu
	$query2 = array();
	$sql3 = array(); //untuk manfaat
	$query3 = array();
	$no_himpro = array();
	
	$value_1 = array();
	$value_2 = array();
	for($k = 0,$i = 1; $i < 9; $i++){
		if($himpro[0] === '1' || $himpro[$i]){
			$nama_himpro[$i] = himpro($i);
			if($himpro[9] === '1' || $himpro[10] === '1'){
				$sql1[$i] = "select count(`maha_id`) from `himpro` where `tahu_proker` = '1' and `no_dep` = $i";
				$sql2[$i] = "select count(`maha_id`) from `himpro` where `tahu_proker` = '0' and `no_dep` = $i";
				$query1[$i] = mysql_fetch_row(mysql_query($sql1[$i]));
				$query2[$i] = mysql_fetch_row(mysql_query($sql2[$i]));
				//echo $sql1[$i] . "<br>"; //untuk debugging 
				//echo $sql2[$i] . "<br>"; //untuk debugging 
				//echo $query1[$i][0] . "<br>"; //untuk debugging 
				//echo $query2[$i][0] . "<br>"; //untuk debugging 
				$value_1[] .= "['" . $nama_himpro[$i] . "'," . $query1[$i][0] . "," . $query2[$i][0] . "]";
				
			}
			if($himpro[9] === '1' || $himpro[11] === '1'){
				$value_2[$k] .= "['" . $nama_himpro[$i] . "',";
				for($j = 1; $j < 6; $j++){
					$sql3[$i] = "select count(`maha_id`) from `himpro` where `dukung` = '$j' and `no_dep` = $i";
					$query3[$i] = mysql_fetch_row(mysql_query($sql3[$i]));
					//echo $sql3[$i] . "<br>"; //untuk debugging 
					//echo $query3[$i][0] . "<br>"; //untuk debugging 
					$value_2[$k] .= $query3[$i][0] . ",";
				}
				$value_2[$k] .= "]";
				$k++;
			}
		}
	}
	//print_r($value_1);
	//print_r($value_2);
	$count_1 = count($value_1);
	
	$real_value1 = "";
	$real_value2 = "";
	
	for($i = 0; $i < $count_1; $i++){
		$real_value1 .= $value_1[$i];
		$real_value2 .= $value_2[$i];
		if($i !== $count_1 - 1){
			if($himpro[9] === '1' || $himpro[10] === '1'){
				$real_value1 .= ",";
			}
			if($himpro[9] === '1' || $himpro[11] === '1'){
				$real_value2 .= ",";
			}
		}
	}
	
	if($himpro[9] === '1' || $himpro[10] === '1'){
		$title = "'Mahasiswa Departemen Masing-Masing Yang Mengetahui Proker HIMPROnya'";
		print_chart_himpro_1($real_value1,$title);
	}
	if($himpro[9] === '1' || $himpro[11] === '1'){
		$title = "'Mahasiswa Departemen Masing-Masing Yang Mendukung Proker HIMPROnya'";
		print_chart_himpro_2($real_value2,$title);
	}
	
}
//=============PENDIDIKAN===============
if($data[0] === '1' || $data[5] === '1'){
	$pendidikan = array();
	$pendidikan[] = $_POST['all7'];
	$pendidikan[] = $_POST['pel_admin_f'];
	$pendidikan[] = $_POST['pel_admin_d'];
	$pendidikan[] = $_POST['tahu'];
	$pendidikan[] = $_POST['media'];
	
	if($pendidikan[0] === '1' || $pendidikan[1] === '1'){
		$sql = array();
		$query = array();
		for($j = 1,$i = 0; $i<5 ; $i++,$j++){
			$sql[$i] = "select count(`maha_id`) from `pendidikan` where `pel_admin_f` = '$j'";
			//echo $sql[$i] . "<br>";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
			//echo $query[$i] . "<br>";
		}
		$value = "";
		for($i=0; $i< 5; $i++){
			$value .= "['" . $manfaat[$i] . "'," . $query[$i][0] . "]";
			if($i !== 4) $value .= ",";
		}
		//echo $value;
		$title = "'Seberapa Baik Pelayanan Administrasi FMIPA'";
		print_chart_pendidikan_1($value,$title);
	}
	if($pendidikan[0] === '1' || $pendidikan[2] === '1'){
		$sql = array();
		$query = array();
		for($k = 0,$i = 1; $i < 9; $i++){
			for($j = 1; $j < 6; $j++,$k++){
				$sql[$k] = "select count(`maha_id`) from `pendidikan` where `pel_admin_d` = '$j' and `no_dep` = '$i'";
				//echo $sql[$i] . "<br>";
				$query[$k] = mysql_fetch_row(mysql_query($sql[$k]));
			}
		}
		
		$value = "";
		for($k = 0,$i = 1; $i < 9; $i++){
			$value .= "['G" . $i . "',";
			for($j = 1; $j < 6; $j++,$k++){
				$value .= $query[$j][0];
				if($j !== 5) $value .= ",";
			}
			$value .= "]";
			if($i !== 8) $value .= ",";
		}
		
		$title = "'Seberapa Baik Admininstrasi di masing-masing Departemen FMIPA'";
		print_chart_pendidikan_2($value,$title);
	}
	if($pendidikan[0] === '1' || $pendidikan[3] === '1'){
		$sql = array();
		$query = array();
		$sql[] = "select count(`maha_id`) from `pendidikan` where `tahu_bea` = '1' or `tahu_bea` = '2'";
		$sql[] = "select count(`maha_id`) from `pendidikan` where `tahu_bea` = '0'";
		$sql[] = "select count(`maha_id`) from `pendidikan` where `tahu_lomba` = '1' or `tahu_bea` = '2'";
		$sql[] = "select count(`maha_id`) from `pendidikan` where `tahu_lomba` = '0'";
		$query[] = mysql_fetch_row(mysql_query($sql[0]));
		$query[] = mysql_fetch_row(mysql_query($sql[1]));
		$query[] = mysql_fetch_row(mysql_query($sql[2]));
		$query[] = mysql_fetch_row(mysql_query($sql[3]));
		
		$value = "['BEASISWA'," . $query[0][0] . "," . $query[1][0] ."],['LOMBA'," . $query[2][0] . "," . $query[3][0] . "]";
		//echo $value;
		$title = "'Jumlah Mahasiswa yang Mengetahui informasi Beasiswa dan Lomba'";
		print_chart_pendidikan_3($value,$title);
	}
	if($pendidikan[0] === '1' || $pendidikan[4] === '1'){
		$sql = array();
		$query = array();
		
		$media = array();
		$media[] = "twitter_";
		$media[] = "facebook_";
		$media[] = "blog_web_";
		$media[] = "lain_";
		
		$media1 = array();
		$media1[] = "bea";
		$media1[] = "lomba";
		
		for($k = 0,$j = 0,$i = 0; $k < 8; $i++,$k++){
			if($i === 4) {$j++; $i = 0;}
			$sql[$k] = "select count(`maha_id`) from `pendidikan` where `$media[$i]$media1[$j]` = '1'";
			//echo $sql[$k] . "<br>";
			$query[$k] = mysql_fetch_row(mysql_query($sql[$k]));
			//echo $k . " = " . $query[$k][0] . "<br>";
		}
		
		$value= "['BEASISWA',";
		for($i = 0; $i < 4; $i++){
			$value .= $query[$i][0];
			if($i !== 3) $value .= ",";
		}
		$value .= "],['LOMBA',";
		for($i = 4; $i < 8; $i++){
			$value .= $query[$i][0];
			if($i !== 7) $value .= ",";
		}
		$value .= "]";
		//echo $value;
		$title = "'Jumlah Media yang Digunakan Mahasiswa Dalam Mencari Informasi Beasiswa dan Lomba'";
		print_chart_pendidikan_4($value,$title);
	}
}
//================SARANA===================
if($data[0] === '1' || $data[4] === '1'){
	$sarana = array();
	$sarana[] = $_POST['all5'];
	$sarana[] = $_POST['fasilitas_madai'];
	$sarana[] = $_POST['fasilitas_krg_madai'];
	
	if($sarana[0] === '1' || $sarana[1] === '1'){
		$sql = array();
		$query = array();
		
		$sql[] = "select count(`maha_id`) from `sarana` where `sar_umum` = '1'";
		$sql[] = "select count(`maha_id`) from `sarana` where `sar_umum` = '0'";
		$query[] = mysql_fetch_row(mysql_query($sql[0]));
		$query[] = mysql_fetch_row(mysql_query($sql[1]));
		
		$value = "['Sudah Memadai'," . $query[0][0] . "],['Belum Memadai'," . $query[1][0] . "]";
		$title = "'Pendapat Mahasiswa FMIPA tentang Fasilitas Sarana dan Prasarana'";
		
		print_chart_sarana_1($value,$title);
	}
	if($sarana[0] === '1' || $sarana[2] === '1'){
		$sql = array();
		$query = array();
		
		$sarana_1 = array();
		$sarana_1[] = "toilet";
		$sarana_1[] = "kelas";
		$sarana_1[] = "musholla";
		$sarana_1[] = "sc";
		$sarana_1[] = "lain";
		
		$sarana_2 = array();
		$sarana_2[] = "Toilet";
		$sarana_2[] = "Ruang Kelas";
		$sarana_2[] = "Musholla";
		$sarana_2[] = "Student Center";
		$sarana_2[] = "Lainnya";
		
		for($i = 0; $i < 5; $i++){
			$sql[$i] = "select count(`maha_id`) from `sarana` where `$sarana_1[$i]` = '1'";
			//echo $sql[$i] . "<br>";
			$query[$i] = mysql_fetch_row(mysql_query($sql[$i]));
		}
		
		$value = "";
		for($i = 0; $i < 5; $i++){
			$value .= "['" . $sarana_2[$i] . "'," . $query[$i][0] . "]";
			if($i !== 4) $value .= ",";
		}
		
		$title = "'Sarana yang Dianggap Belum Memadai di FMIPA'";
		print_chart_sarana_2($value,$title);
	}
}
?>	
<body>
</html>