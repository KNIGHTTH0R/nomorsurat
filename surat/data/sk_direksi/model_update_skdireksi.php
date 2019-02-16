<title>Sistem Informasi Sketsa YPI</title>

<?php 
include "../../../Connections/koneksi.php";

$ID_konselor = $_GET['id'];
$no_konselor = $_POST['no_konselor'];
$nama_konselor = $_POST['nama_konselor'];

$query = "update konselor set
ID_konselor = '$ID_konselor',
no_konselor = '$no_konselor',
nama_konselor =	'$nama_konselor'

where ID_konselor = '$ID_konselor'";
$exec = mysql_query($query);

if($exec)
{

echo "<meta http-equiv='refresh' content='0; url=data_konselor.php'>";
} 
 else {

echo "<meta http-equiv='refresh' content='0; url=data_konselor.php'>";
}
?>