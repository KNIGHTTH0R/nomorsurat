<title>Sistem Informasi Sketsa YPI</title>

<?php 
include "../../../Connections/koneksi.php";

$ID_konselor = $_GET['id'];
$query = "DELETE FROM konselor WHERE ID_konselor = '$ID_konselor'";
$exec = mysql_query($query);

if($exec)
{

echo "<meta http-equiv='refresh' content='0; url=data_konselor.php'>";
} else {

echo "<meta http-equiv='refresh' content='0; url=data_konselor.php'>";
}
?>