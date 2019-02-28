<html>
<title>Penomoran Surat MIG</title>
<body>

<?php 
session_start();
$ID_user = $_SESSION['ID_user'];
include "../../../Connections/koneksi.php";
include "../../../Connections/tgl.php";

$nama =$_POST['nama'];
$level =$_POST['level'];
$username =$_POST['username'];
$password =md5($_POST['password']);




$query = "insert into user (nama_lengkap, level_user, username, password) values ('$nama', '$level', '$username', '$password') ";

   

$exec = mysql_query($query);

if($exec)
{
echo "<meta http-equiv='refresh' content='0; url=data_user.php'>";
} 
 else {

echo "<meta http-equiv='refresh' content='0; url=data_user.php'>";
}
?>