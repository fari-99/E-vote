<?php 
	function logged_in(){
		return (isset($_SESSION['maha_id'])) ? true : false;
	}
	
	function user_id_from_nama($username){
		$nama = sanitize($username);
		$query = mysql_query("select `maha_id` from `mahasiswa` where `username` = '$username'");
		//echo mysql_error();
		return mysql_result($query, 0, 'maha_id');
	}
	
	function login($username, $password){
		$maha_id = user_id_from_nama($username);
		//die($maha_id);
		$username = strtolower(sanitize($username));;
		$password = md5($password);
		//echo $maha_id,$username,$password;
		$query = mysql_query("select count(`maha_id`) from `mahasiswa` where `username` = '$username' and `password` = '$password'");
		//echo mysql_error();
		return (mysql_result($query, 0) == 1) ? $maha_id : false;
	}

	function user_admin($members_name){
		$members_name = sanitize($members_name);
		$query = mysql_query("SELECT count(`members_id`) from `members` where `members_name` = '$members_name' and `user_level` = 1");
		return (mysql_result($query, 0) == 1) ? true : false;
	}
	
	function user_data($maha_id){ //parameter for user data
		$data = array();
		$maha_id = (int)$maha_id;
		
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		//print_r($func_get_args); //debugging
		//echo $func_num_args; //debugging
		if($func_num_args > 1){
			unset($func_get_args[0]);
			$fields = '`' . implode('`, `',$func_get_args) . '`';
			//echo $fields; //debugging
			$data = mysql_fetch_assoc(mysql_query("select $fields from `mahasiswa` where `maha_id` = $maha_id"));
			return $data;
		}
		//print_r($func_get_args); //debugging
	}
	
	function himpro($departemen){
		switch($departemen){
			case "Statistika":
				$id_himpro = "GSB";
				break;
			case "Geo Fisika dan Meteorologi":
				$id_himpro = "Himagreto";
				break;
			case "Biologi":
				$id_himpro = "Himabio";
				break;
			case "Kimia":
				$id_himpro = "Imasika";
				break;
			case "Matematika":
				$id_himpro = "Gumatika";
				break;
			case "Ilmu Komputer":
				$id_himpro = "Himalkom";
				break;
			case "Fisika":
				$id_himpro = "Himafi";
				break;
			case "Biokimia":
				$id_himpro = "Crebs";
				break;
			case "1":
				$id_himpro = "GSB";
				break;
			case "2":
				$id_himpro = "Himagreto";
				break;
			case "3":
				$id_himpro = "Himabio";
				break;
			case "4":
				$id_himpro = "Imasika";
				break;
			case "5":
				$id_himpro = "Gumatika";
				break;
			case "6":
				$id_himpro = "Himalkom";
				break;
			case "7":
				$id_himpro = "Himafi";
				break;
			case "8":
				$id_himpro = "Crebs";
				break;
			default:
				$id_himpro = "unknown";
				break;
		}
		return $id_himpro;
	}
	
	function no_dep($departemen){
		switch($departemen){
			case "Statistika":
				$no_dep = "1";
				break;
			case "GeoFisika dan Meteorologi":
				$no_dep = "2";
				break;
			case "Biologi":
				$no_dep = "3";
				break;
			case "Kimia":
				$no_dep = "4";
				break;
			case "Matematika":
				$no_dep = "5";
				break;
			case "Ilmu Komputer":
				$no_dep = "6";
				break;
			case "Fisika":
				$no_dep = "7";
				break;
			case "Biokimia":
				$no_dep = "8";
				break;
			default:
				$no_dep = "unknown";
				break;
		}
		return $no_dep;
	}
	
	function profile($data){
		echo
			'<ul>
				 <li>Username	: ' . $username 		= $data['username'] . 
				'<li>Nama		: ' . $nama 			= $data['nama'] . 
				'<li>NIM		: ' . $nim				= $data['nim'] . 
				'<li>Departemen	: ' . $departemen 		= $data['departemen'] .
			'</ul>' ;
	}
	
	function input_form($data){
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		//print_r($func_get_args); //debugging
		//echo $func_num_args; //debugging
		if($func_num_args > 1){
			unset($func_get_args[0]);
			$fields = '`' . implode('`, `',$func_get_args) . '`';
			//echo $fields; //debugging
			//die();
		}
		$sql = "insert into `$data[12]` ($fields) values ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]')";
		//echo $sql.'<br>';
		//die();
		$query = mysql_query($sql);
		//echo $query;
		//die();
		$sql1 = "update `mahasiswa` set `isi_$data[12]` = '1' where `maha_id` = '$data[11]'";
		//echo $sql1;
		$query1 = mysql_query($sql1);
		//die();
		return $query;
	}
	
	function check_form($id){
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		//print_r($func_get_args); //debugging
		//echo '<br>' . $func_num_args; //debugging
		if($func_num_args > 1){
			unset($func_get_args[0]);
			$fields = '`'. $func_get_args[1] . '`';
		}
		//die($fields);
		$sql = "SELECT count($fields) as `$func_get_args[1]` FROM `mahasiswa` WHERE `maha_id` = '$id' and $fields = '1'";
		$query = mysql_query($sql);
		$result = mysql_result($query,0);
		return $result;
	}
	
	function check_submit($id){
		$sql = array();
		$sql[] = mysql_result(mysql_query("select count(`maha_id`) from `mahasiswa` where `isi_bem` = '1'"),0);
		$sql[] = mysql_result(mysql_query("select count(`maha_id`) from `mahasiswa` where `isi_serum` = '1'"),0);
		$sql[] = mysql_result(mysql_query("select count(`maha_id`) from `mahasiswa` where `isi_himpro` = '1'"),0);
		$sql[] = mysql_result(mysql_query("select count(`maha_id`) from `mahasiswa` where `isi_sarana` = '1'"),0);
		$sql[] = mysql_result(mysql_query("select count(`maha_id`) from `mahasiswa` where `isi_pendidikan` = '1'"),0);
		$sql[] = mysql_result(mysql_query("select count(`maha_id`) from `mahasiswa` where `isi_semua` = '1'"),0);
		
		if(($sql[0] === '1' && $sql[1] === '1' && $sql[2] === '1' && $sql[3] === '1'  && $sql[4] === '1') || $sql[5] === '1'){
			if($sql[5] === '0'){
				$sql[] = mysql_result(mysql_query("update `mahasiswa` set `isi_semua` = '1'"),0);
				if($sql[6] === false){
					$error[] = 'sorry there is a problem..';
				}
			}
			return true;
		}
		else{
			if($sql[0] === '0' || $sql[1] === '0' || $sql[2] === '0' || $sql[3] === '0' || $sql[4] === '0'  || $sql[5] === '0'){
				return false;
			}
		}
	}
	
	function print_himpro($no_himpro,$himpro){
		echo "<li><h3>" . himpro($no_himpro) . "</h3><ul>";
		if($himpro[9] === '1' || $himpro[10] === '1'){
			$sql = "SELECT distinct `tahu_proker`, count(`maha_id`) as jumlah  FROM `himpro` where `no_dep` = '$no_himpro' group by `tahu_proker`";
			$query = mysql_query($sql);
			echo "<li><h4>Yang mengetahui program kerja Himpro-nya</h4>";
?>
				<table width = "500" border = "1">
					<?php
					
					?>
						<tr>
							<td align ="center">No</td>
							<td align ="center">Jenis</td>
							<td align ="center">Jumlah</td>
						</tr>
					<?php
					$i = '1';
					while($row = mysql_fetch_assoc($query)){
						?>
								<tr>
									<td align ="center"><?php echo $i;?></td>
									<td align ="center"><?php if($row['tahu_proker'] === '1') echo "Tahu"; else echo "Tidak Tahu"?></td>
									<td align ="right"><?php echo $row['jumlah'];?></td>
								</tr>
							<?php
							$i++;
					}
					?>
				</table>
<?php	}
		if($himpro[9] === '1' || $himpro[11] === '1'){
			echo "<li><h4>Apakah program kerja himpro sesuai minat dan bakat mahasiswa departemennya</h4>";
			$sql = "SELECT distinct `manfaat_himpro`, count(`maha_id`) as jumlah  FROM `himpro` where `no_dep` = '$no_himpro' group by `manfaat_himpro`";
			$query = mysql_query($sql);
?>
			<table width = "500" border = "1">
				<tr>
					<td align ="center">No</td>
					<td align ="center">Jenis</td>
					<td align ="center">Jumlah</td>
				</tr>
				<?php
				$i = '1';
				while($row = mysql_fetch_array($query)){
					?>
					<?php if($row['manfaat_biskuit'] !== '0'){?>
					<tr>
						<td align ="center"><?php echo $i;?></td>
						<td align ="center"><?php if($row['manfaat_himpro'] === '5') echo "Sangat Bermanfaat"; else if($row['manfaat_himpro'] === '4') echo "Lumayan Bermanfaat";else if($row['manfaat_himpro'] === '3') echo "Cukup Bermanfaat";else if($row['manfaat_himpro'] === '2') echo "Tidak Bermanfaat";else if($row['manfaat_himpro'] === '1') echo "Sangat Tidak Bermanfaat";?></td>
						<td align ="right"><?php echo $row['jumlah'];?></td>
					</tr>
					<?php
					$i++;
					}
				}
				?>
			</table>
<?php	}
		echo "</ul>";
	}
	
	function print_sarana($sarana){
		echo "<h2>Sarana</h2>";
		echo "<ol>";
		if($sarana[0] === '1' || $sarana[1] === '1'){
			echo "<li><h4>Seberapa bermanfaat sarana umum di FMIPA</h4>";
			$sql = "select distinct `sar_umum`,count(`maha_id`) as jumlah from `sarana` group by `sar_umum`";
			$query = mysql_query($sql);
?>			<table width = "500" border = "1">
				<tr>
					<td align ="center">No</td>
					<td align ="center">Jenis</td>
					<td align ="center">Jumlah</td>
				</tr>
				<?php
				$i = '1';
				while($row = mysql_fetch_array($query)){
					?>
					<?php if($row['sar_umum'] !== '0'){?>
					<tr>
						<td align ="center"><?php echo $i;?></td>
						<td align ="center"><?php if($row['sar_umum'] === '5') echo "Sangat Bermanfaat"; else if($row['sar_umum'] === '4') echo "Lumayan Bermanfaat";else if($row['sar_umum'] === '3') echo "Cukup Bermanfaat";else if($row['sar_umum'] === '2') echo "Tidak Bermanfaat";else if($row['sar_umum'] === '1') echo "Sangat Tidak Bermanfaat";?></td>
						<td align ="right"><?php echo $row['jumlah'];?></td>
					</tr>
					<?php
					$i++;
					}
				}
				?>
			</table>
<?php	}
		if($sarana[0] === '1' || $sarana[2] === '1'){
			echo "<li><h4>jumlah mahasiswa tentang Sarana Umum yang perlu di tingkatkan</h4>";
			$sql = array();
			$query = array();
			$sql[] = "select distinct count(`kelas`) as kelas, count(`maha_id`) as jumlah from `sarana` where kelas = '1'";
			$sql[] = "select distinct count(`toilet`) as toilet, count(`maha_id`) as jumlah from `sarana` where toilet = '1'";
			$sql[] = "select distinct count(`musholla`) as musholla, count(`maha_id`) as jumlah from `sarana` where musholla = '1'";
			$sql[] = "select distinct count(`sc`) as sc, count(`maha_id`) as jumlah from `sarana` where sc = '1'";
			$sql[] = "select distinct count(`lainnya`) as lainnya, count(`maha_id`) as jumlah from `sarana` where `lain` = '1'";
			$query[] = mysql_fetch_array(mysql_query($sql[0]));
			$query[] = mysql_fetch_array(mysql_query($sql[1]));
			$query[] = mysql_fetch_array(mysql_query($sql[2]));
			$query[] = mysql_fetch_array(mysql_query($sql[3]));
			$query[] = mysql_fetch_array(mysql_query($sql[4]));
?>			<table width = "500" border = "1">
				<tr>
					<td align ="center">No</td>
					<td align ="center">Jenis</td>
					<td align ="center">Jumlah</td>
				</tr>
				<tr>
					<td align ="center">1</td>
					<td align ="center">Ruang Kuliah</td>
					<td align ="center"><?php echo $query[0]['jumlah'];?></td>
				</tr>
				<tr>
					<td align ="center">2</td>
					<td align ="center">Toilet</td>
					<td align ="center"><?php echo $query[1]['jumlah'];?></td>
				</tr>
				<tr>
					<td align ="center">3</td>
					<td align ="center">Musholla</td>
					<td align ="center"><?php echo $query[2]['jumlah'];?></td>
				</tr>
				<tr>
					<td align ="center">4</td>
					<td align ="center">Student Center</td>
					<td align ="center"><?php echo $query[3]['jumlah'];?></td>
				</tr>
				<tr>
					<td align ="center">5</td>
					<td align ="center">Lainnya</td>
					<td align ="center"><?php echo $query[4]['jumlah'];?></td>
				</tr>
			</table>
<?php	}
		echo "</ol>";
	}
?>