<?php
session_start();
include "Connections/koneksi.php";
include "Connections/library.php";

$txtUser	= secure($_POST['username']);
$txtPass	= secure($_POST['password']);
$passenkrip = md5($txtPass);
$tgl 		= date("Y-m-d h:m:s");


$sqlPeriksa = "SELECT * FROM user WHERE username='$txtUser' AND password='$passenkrip'";


$qryPeriksa = mysql_query($sqlPeriksa, $koneksi);
$data=mysql_fetch_array($qryPeriksa);
$hslPeriksa = mysql_num_rows($qryPeriksa);


if ($hslPeriksa >= 1 ) 
	{ 
	# Jika sukses
	$_SESSION['username'] = $txtUser;
	$_SESSION['ID_user'] = $data['ID_user'];
	$level = $data['level_user'];
	$_SESSION['level'] = $level; 
	$sql_update = "UPDATE `user` SET  `status` = '"."login"."' ,`last_login` =  '".$tgl."'   WHERE `ID_user` ='$data[ID_user]' "; 		
	mysql_query($sql_update);	
	

			
			
			
	if($level=="administrator")
		{

	$sqlAdmin = "SELECT * FROM user WHERE ID_user='$data[ID_user]' ";
					$qryAdmin = mysql_query($sqlAdmin, $koneksi);
					$dataAdmin = mysql_fetch_array($qryAdmin);	
					$_SESSION['ID_user'] = $dataAdmin['ID_user'];
					$_SESSION['nama'] = $dataAdmin['nama_lengkap'];
					//$_SESSION['number'] = $dataAdmin['no_konselor'];				



					
		# Redireksi menuju index.php
		echo "<meta http-equiv='refresh' content='0; url=surat/index.php'>";
		exit;
		
		


		
		}
else if($level=="dokter")
		{
		
	
	
	$sqldokter = "SELECT * FROM dokter WHERE id_dokter='$data[id_user]' ";
					$qrydokter = mysql_query($sqldokter, $koneksi);
					$datadokter = mysql_fetch_array($qrydokter);	
					$_SESSION['id_user'] = $datadokter['id_user'];
					$_SESSION['nama'] = $datadokter['nama_dokter'];
					$_SESSION['alamat'] = $datadokter['alamat_dokter'];	
					
				

			
					
		# Redireksi menuju index.php
		echo "<meta http-equiv='refresh' content='0; url=dokter/index.php'>";
		exit;
					
			
											}

		
	} else { header("Location: index.php?page=salahlogin"); }
	


?>