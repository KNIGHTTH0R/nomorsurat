<html>
<title>Penomoran Surat MIG</title>
<body>

<?php 
include "../../../Connections/koneksi.php";
include "../../../Connections/tgl.php";

$id_skdir = $_POST["id_skdir"];
//$nomor_skdir = $_POST["nomor_skdir"];
$id_perusahaan = $_POST ['id_perusahaan'];
$kodeperus = "select sk_dir.kode_perusahaan  AS kode
                    from tb_perusahaan 
                    where tb_perusahaan.id_perusahaan =  '$id_perusahaan'";
            $kodept = mysql_query($kodeperus, $koneksi);
            $aliaspt=mysql_fetch_array($kodept);
            $kodeperusahaan = $aliaspt ['kode_perusahaan'];

$id_document =$_POST["id_document"];

$id_department =$_POST["id_department"];
$id_penandatangan =$_POST["id_penandatangan"];
$tanggal =$_POST["tanggal"];
$keterangan =$_POST["keterangan"];
$ID_user =$_POST["ID_user"];
$bulan_romawi = bln_romawi($tanggal);
$tahun = tahun ($tanggal);
 // membaca kode / nilai tertinggi dari penomoran yang ada didatabase berdasarkan tanggal
    $query2 = "SELECT max (nomor_skdir,0,3)+1 as maxKode FROM sk_dir WHERE month(tanggal)='$bulan_romawi'";
    $hasil = mysql_query($query);
    $data  = mysql_fetch_array($hasil);
    $no= $data['maxKode'];
    $noUrut= $no + 1;
    
    //membuat Nomor Surat Otomatis dengan awalan depan 0 misalnya , 01,02 
    //jika ingin 003 ,tinggal ganti %03
    $kode =  sprintf("%03s", $noUrut);
    //$nomorbaru = $kode.$nomor;

    //membuat Nomor Surat Otomatis dengan awalan depan 0 misalnya , 01,02 
    //jika ingin 003 ,tinggal ganti %03
$kode =  sprintf("%03s", $noUrut);
$nomor_skdir = $kode."/".$kodeperus."/SK-HRD/"."DIR/".$bulan_romawi."/".$tahun;

$query = "insert into sk_dir set
id_skdir = 'id_skdir',
id_perusahaan = '$id_perusahaan',
id_document = '$id_document',
id_department = '$id_department',
id_penandatangan = '$id_penandatangan',
keterangan = '$keterangan',
tanggal = '$tanggal',
ID_user = '$ID_user',
nomor_skdir = '$nomor_skdir'
";

   

$exec = mysql_query($query, $query2);

if($exec)
{
echo "<meta http-equiv='refresh' content='0; url=data_skdireksi.php'>";
} 
 else {

echo "<meta http-equiv='refresh' content='0; url=data_skdireksi.php'>";
}
?>