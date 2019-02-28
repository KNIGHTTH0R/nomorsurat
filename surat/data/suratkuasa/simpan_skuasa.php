<html>
<title>Penomoran Surat Perusahaan</title>
<body>

<?php 
session_start();
$ID_user = $_SESSION['ID_user'];
include "../../../Connections/koneksi.php";
include "../../../Connections/tgl.php";

//$id_skdir = $_POST["id_skdir"];
//$nomor_skdir = $_POST["nomor_skdir"];
$id_perusahaan = $_POST ['id_perusahaan'];
// $kodeperus = "select sk_dir.id_perusahaan  AS kode
//                     from tb_perusahaan 
//                     where tb_perusahaan.id_perusahaan =  '$id_perusahaan'";
//             $kodept = mysql_query($kodeperus, $koneksi);
//             $aliaspt=mysql_fetch_array($kodept);
//             $kodeperusahaan = $aliaspt ['id_perusahaan'];

$id_document =$_POST['id_document'];
// $kodedoc = "select sk_dir.id_document AS kodedocu from jenis_doc where jenis_doc.id_document = '$id_document'";
// $docKode = mysql_query($kodedoc, $koneksi);
// $aliasdoc = mysql_fetch_array($docKode);
// $doc = $aliasdoc['id_document'];


$id_department =$_POST['id_department'];
$id_penandatangan =$_POST['id_penandatangan'];
$tanggal =$_POST['tanggal'];
$keterangan =$_POST['keterangan'];
// $ID_user =$_POST['ID_user'];
// $bulan_romawi = bln_romawi($tanggal);
$tahun = tahun ($tanggal);
 // membaca kode / nilai tertinggi dari penomoran yang ada didatabase berdasarkan tanggal
    // $query2 = "SELECT max (nomor_skdir,0,3)+1 as maxKode FROM sk_dir WHERE month(tanggal)='$bulan_romawi'";
    // $hasil = mysql_query($query);
    // $data  = mysql_fetch_array($hasil);
    // $no= $data['maxKode'];
    // $noUrut= $no + 1;
    
    //membuat Nomor Surat Otomatis dengan awalan depan 0 misalnya , 01,02 
    //jika ingin 003 ,tinggal ganti %03
    // $kode =  sprintf("%03s", $noUrut);
    //$nomorbaru = $kode.$nomor;

    //membuat Nomor Surat Otomatis dengan awalan depan 0 misalnya , 01,02 
    //jika ingin 003 ,tinggal ganti %03
// $kode =  sprintf("%03s", $noUrut);
// $nomor_skdir = $kode."/".$kodeperus."/SK-HRD/"."DIR/".$bulan_romawi."/".$tahun;

$query = "insert into suratkuasa (nomor_skuasa, id_perusahaan, id_document, id_department, id_penandatangan, tanggal, keterangan, ID_user) values ('','$id_perusahaan','$id_document','$id_department','$id_penandatangan','$tanggal','$keterangan','$ID_user')";

   

$exec = mysql_query($query);

if($exec)
{
echo "<meta http-equiv='refresh' content='0; url=data_skuasa.php'>";
} 
 else {

echo "<meta http-equiv='refresh' content='0; url=data_skuasa.php'>";
}
?>