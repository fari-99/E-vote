
<?php
		else{
			$sar_umum = $_POST['sar_umum'];
			$alasan_sar_umum = $_POST['alasan_sar_umum'];
			$kelas = $_POST['kelas'];
			$toilet = $_POST['toilet'];
			$musholla = $_POST['musholla'];
			$sc = $_POST['sc'];
			$lain = $_POST['lain'];
			$lainnya = $_POST['lainnya'];
			$aspirasi = $_POST['aspirasi'];
			$saran = $_POST['saran'];
			$solusi = $_POST['solusi'];
			$alasan_krg_madai = $_POST['alasan_krg_madai'];
			$id = $session_user_id;
			
			$sql = "INSERT INTO `sarana`(`maha_id`, `sar_umum`, `alasan_sar_umum`, `kelas`, `toilet`, `musholla`, `sc`,`lain`, `lainnya`, `aspirasi`, `saran`, `solusi`, `alasan_krg_madai`) 
			VALUES ('$id','$sar_umum','$alasan_sar_umum','$kelas','$toilet','$musholla','$sc','$lain','$lainnya','$aspirasi','$saran','$solusi','$alasan_krg_madai')";
			//die($sql);
			$query = mysql_query($sql);
			$result = mysql_result($query,0);
			
			if($result === false){
				$error[] = 'sorry, there is some problem with database.s';
			}
			else{
				$sql = "update `mahasiswa` set `isi_sarana` = '1' where `maha_id` = '$session_user_id'";
				$query = mysql_query($sql);
				if(!$query){
					echo "sorry there is a problem, please reload";
					//die();
				}
				else{
					header('location:home.php');
					exit(0);
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