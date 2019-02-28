<?php
session_start();
$ID_user = $_SESSION['ID_user']; 
//$flag_type = $_SESSION['flag_type'];
//echo $flag_type;
include "../../../Connections/koneksi.php";
include "../../../Connections/tgl.php";
?>
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../../../images/logo_mig.jpeg">
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
                	<li class="current"><a href="#">Add User</a></li>
                    
                </ul><!--maintabmenu-->
                
                <div class="content">
                	
                    
            <div class="contenttitle">
                    	<h2 class="form"><span>Form Input</span></h2>
                    </div><!--contenttitle-->
                    
                    <br />
                    
                    <form id="form1" class="stdform stdform2" enctype="multipart/form-data" action="simpan_user.php" method="post">
                    	<p>
                        	<label>No.</label>
                            <span class="field"><input name="no" type="hidden" id="textfield" class="longinput" />Diisi secara otomatis</span>
                        </p>
                        <p>
                          <label>Nama Lengkap *</label>
                            <span class="field"><input name="nama" type="text" id="nama" class="longinput" /></span>
                        </p>
                        <?php           
$query ="select level_user from level";
$tampil = mysql_query($query,$koneksi);?>  
                        <p>
                          <label>Level User *</label>
                           <span class="field">
                            <select data-placeholder="Level User" class="select" name="level" id="level" style="width:350px;" tabindex="2">
                                    <option value=""></option>
                                  <?php  
                                     while ($data = mysql_fetch_array($tampil))
            { ?>
                                    <option value="<?php echo $data['id_level']; ?>"><?php echo $data['level_user']; ?></option>  
                            <?php    
            }
            ?>
                                    </select>
                            </span>
                        </p>   
                        <p>
                        	<label>Username *</label>
                            <span class="field"><input name="username" type="text" id="username" class="longinput" /></span>
                        </p>                        
                       <p>
                          <label>Password *</label>
                            <span class="field"><input name="password" type="password" id="password" class="longinput" />
                            <small style="color:#999999">Max. 10 Karakter</small>
                            </span>
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