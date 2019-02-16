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

$ID_konselor = $_GET['id'];

$query = "select * from konselor WHERE ID_konselor = '$ID_konselor'";

$exec = mysql_query($query);
$data=mysql_fetch_array($exec);
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
            	
                <ul class="maintabmenu multipletabmenu">
                	<li class="current"><a href="#">Data Konselor</a></li>
                    
                </ul><!--maintabmenu-->
                
                <div class="content">
                	
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Form Edit Data Konselor</span></h2>
                    </div><!--contenttitle-->
                    
                    <br />
                    
                    <form id="form1" class="stdform stdform2" method="post" action="model_update_konselor.php?id=<?php echo $data['ID_konselor']; ?>">
                    	<p>
                        	<label>Kode Konselor *</label>
                            <span class="field"><input type="text" name="no_konselor" id="no_konselor" class="longinput" value="<?php echo $data['no_konselor']; ?>" /></span
                        ></p>
                        
                        <p>
                        	<label>Nama Konselor *</label>
                            <span class="field"><input type="text" name="nama_konselor" id="nama_konselor" class="longinput" value="<?php echo $data['nama_konselor']; ?>" /></span>
                        </p>

                        <p class="stdformbutton">
                        	<button class="submit radius2">Simpan</button>
                            <input type="reset" onclick="javascript:history.back()" class="reset radius2" value="Kembali" />
							&nbsp;&nbsp;&nbsp;&nbsp;<small style="color:#999999">* = wajib diisi</small>
                        </p>
                    </form>
                    
                    <br clear="all" />
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <div class="footer">
          <?php include "../../../inc/footer.php"; ?>
            </div><!--footer-->
            
        </div><!--maincontent-->
       
       
       
       
       
        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->	<!-- END OF MAIN CONTENT -->