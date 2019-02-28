<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../../../images/bprs/logo.png">
<title>Penomoran Surat Perusahaan</title>
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
include "../../../Connections/tgl.php";

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
                	<li class="current"><a href="#">Surat Keputusan Direksi</a></li>
                </ul><!--maintabmenu-->
                
                <div class="content">

<p align="left" style="margin-left:60px;"><a href="input_skdireksi.php"><img src="../../../images/tambah.png" width="38" height="38" /><br />Tambah Data</a></p> </br>


                <div class="contenttitle radiusbottom0">
                	<h2 class="table"><span>Manage Data </span></h2>
                </div><!--contenttitle-->
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
						<col class="con1" />
						<col class="con0" />
						<col class="con1" />
						<col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
    <td><div align="center"><strong>No.</strong></div></td>
    <td><div align="center"><strong>Nomor Surat</strong></div></td>
     <td><div align="center"><strong>Tanggal</strong></div></td>
      <td><div align="center"><strong>Nama Perusahaan</strong></div></td>
    <td><div align="center"><strong>Keterangan</strong></div></td>
     <td><div align="center"><strong>Nama User</strong></div></td>
    <td><div align="center"><strong>Aksi</strong></div></td>
      </tr>
                    </thead>
                    
                    <tbody>
                    
       <?php
       $query = "select nomor_skdir,tanggal, nama_perusahaan, keterangan, nama_lengkap from sk_dir inner join user on user.ID_user=sk_dir.ID_user inner join tb_perusahaan on tb_perusahaan.id_perusahaan = sk_dir.id_perusahaan";
	   $exec = mysql_query($query); 
	   ?>
                    
<?php  
$no = +1;
while($data=mysql_fetch_array($exec)){ ?>

  <tr>
    <td><div align="center"><?php echo $no; ?></div></td>
    <td><div align="center"><?php echo $data['nomor_skdir']; ?></div></td>
    <td><div align="center"><?php echo $data['tanggal']; ?></div></td>
     <td><div align="center"><?php echo $data['nama_perusahaan']; ?></div></td>
    <td><div align="center"><?php echo $data['keterangan']; ?></div></td>
    <td><div align="center"><?php echo $data['nama_lengkap']; ?>
        
    </div></td>
    <td><div align="center"><a href="delete_skdireksi.php?id=<?php echo $data['id']; ?>"><img src="../../images/delete.png" width="20" height="20"/></a></div></td>
  </tr>
 
  <?php 
$no++ ;}
 ?>
</tbody>
                </table>
				
                    
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