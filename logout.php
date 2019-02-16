<?php
session_start();
include "Connections/koneksi.php";
include "Connections/library.php";

$last	 = date("Y-m-d- h:m:s");

$id = $_SESSION['ID_user'];

$sql_update 	= "UPDATE `user` SET  `status` = '"."logout"."' ,`last_login` =  '".$last."'  WHERE `ID_user` ='$id' "; 		$query_update 	= mysql_query($sql_update);	


session_destroy();

header("location: index.php");

?>