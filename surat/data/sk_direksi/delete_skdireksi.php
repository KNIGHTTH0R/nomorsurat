<title>Sistem Informasi Sketsa YPI</title>

<?php 
include "../../../Connections/koneksi.php";

$id_skdir = $_GET['id'];
$query = "DELETE FROM konselor WHERE id_skdir = '$id_skdir'";
$exec = mysql_query($query);

if($exec)
{

echo "<meta http-equiv='refresh' content='0; url=data_konselor.php'>";
} else {

echo "<meta http-equiv='refresh' content='0; url=data_konselor.php'>";
}
?>