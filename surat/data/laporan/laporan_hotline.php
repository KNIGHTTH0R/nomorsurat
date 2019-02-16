<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../../../images/bprs/logo.png">
<title>Sistem Informasi Sketsa YPI</title>
<link rel="stylesheet" href="../../../css/style.css" type="text/css" />
<script type="text/javascript" src="../../../js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="../../../js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../../js/custom/general.js"></script>
<script type="text/javascript" src="../../../js/custom/tables.js"></script>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="loggedin">
<?php
include "../../../Connections/koneksi.php";
include "../../../Connections/library.php";

?>
	<!-- START OF HEADER -->
	<div class="header radius3">
    	
		<?php include "../../inc/header.php"; ?>
		
	</div><!--header-->
    <!-- END OF HEADER -->
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        <div class="mainleft">
          	<div class="mainleftinner">
            
              	<div class="leftmenu">
            		
					 <?php include "../menu_klinik.php"; ?>
					                        
                </div><!--leftmenu-->
            	<div id="togglemenuleft"><a></a></div>
            </div><!--mainleftinner-->
        </div><!--mainleft-->
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
                <ul class="maintabmenu">
                	<li class="current"><a href="#">Laporan Hotline</a></li>
                </ul><!--maintabmenu-->
                 
                      <div class="content">
 <div class="contenttitle radiusbottom0">
                	<h2 class="table"><span>Laporan Data Konseling Penelepon</span></h2>
                </div>
</br>
Laporan Berdasarkan Tanggal :
<form id="form1" name="form1" method="post" action="../../../laporan/penelepon_tgl.php">
Dari Tanggal :
<label for="textfield"></label>
<input type="date" name="tgl_awal" id="textfield" />
Sampai dengan Tanggal :
<input type="date" name="tgl_akhir" id="textfield2" />
<input type="submit" name="button" id="button" value="cetak" />
</form>
<p>&nbsp;</p>


Laporan Berdasarkan Bulan :


<form id="form2" name="form2" method="post" action="../../../laporan/penelepon_bln.php">
  <label for="select"></label>
  <select name="tgl_awal" id="select">
    <option value="01">Januari</option>
    <option value="02">Februari</option>
    <option value="03">Maret</option>
    <option value="04">April</option>
    <option value="05">Mei</option>
    <option value="06">Juni</option>
    <option value="07">Juli</option>
    <option value="08">Agustus</option>
    <option value="09">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
  </select>
  <input type="submit" name="button" id="button" value="cetak" />
</form>
<p>&nbsp;</p>


Laporan Berdasarkan Tahun :

<form id="form3" name="form3" method="post" action="../../../laporan/penelepon_thn.php">
  <label for="select"></label>
  <select name="tgl_awal" id="select">
  <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
	<option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
	<option value="2025">2025</option>
  </select>
  <input type="submit" name="button" id="button" value="cetak" />
</form>



                
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <div class="footer">
            	<?php include "../../inc/footer.php"; ?>
            </div><!--footer-->
            
        </div><!--maincontent-->
        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

</html>