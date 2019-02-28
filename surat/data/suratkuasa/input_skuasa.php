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
                	<li class="current"><a href="#">Surat Kuasa</a></li>
                    
                </ul><!--maintabmenu-->
                
                <div class="content">
                	
                    
            <div class="contenttitle">
                    	<h2 class="form"><span>Form Input</span></h2>
                    </div><!--contenttitle-->
                    
                    <br />
                    
                    <form id="form1" class="stdform stdform2" enctype="multipart/form-data" action="simpan_skuasa.php" method="post">
                    	<p>
                        	<label>No. Surat</label>
                            <span class="field"><input name="nomor_skuasa" type="hidden" id="textfield" class="longinput" />Diisi secara otomatis</span>
                        </p>
                        <?php           
$query ="select * from tb_perusahaan";
$tampil = mysql_query($query,$koneksi);?>
                            <p><label>Kode Perusahaan *</label>
                            <span class="field"><select data-placeholder="Pilih Kode Perusahaan" class="select" name="id_perusahaan" id="id_perusahaan" style="width:350px;" tabindex="2">
                                    <option value=""></option>
                                  <?php  
                                     while ($data = mysql_fetch_array($tampil))
            { ?>
                                    <option value="<?php echo $data['id_perusahaan']; ?>"><?php echo $data['kode_perusahaan']; ?></option>  
                            <?php    
            }
            ?>
                                    </select>
                            </span>
                        </p>
                        <?php           
$query ="select * from jenis_doc where kode_document ='SKK'";
$tampil = mysql_query($query,$koneksi);?>
                        <p><label>Jenis Dokumen*</label>
                           <span class="field"><select data-placeholder="Pilih Jenis Dokumen" class="select" name="id_document" id="id_document" style="width:350px;" tabindex="2">
                                    <option value=""></option>
                                  <?php  
                                     while ($data = mysql_fetch_array($tampil))
            { ?>
                                    <option value="<?php echo $data['id_document']; ?>"><?php echo $data['nama_document']; ?></option>  
                            <?php    
            }
            ?>
                                    </select>
                            </span>
                        </p>
                        <?php           
$query ="select * from tb_department ";
$tampil = mysql_query($query,$koneksi);?>
                        <p><label>Department*</label>
                           <span class="field"><select data-placeholder="Pilih Department" class="select" name="id_department" id="id_department" style="width:350px;" tabindex="2">
                                    <option value=""></option>
                                  <?php  
                                     while ($data = mysql_fetch_array($tampil))
            { ?>
                                    <option value="<?php echo $data['id_department']; ?>"><?php echo $data['nama_department']; ?></option>  
                            <?php    
            }
            ?>
                                    </select>
                            </span>

                            <?php           
$query ="select * from penandatangan ";
$tampil = mysql_query($query,$koneksi);?>
                        <p><label>Penandatangan*</label>
                           <span class="field"><select data-placeholder="Pilih Penandatangan" class="select" name="id_penandatangan" id="id_penandatangan" style="width:350px;" tabindex="2">
                                    <option value=""></option>
                                  <?php  
                                     while ($data = mysql_fetch_array($tampil))
            { ?>
                                    <option value="<?php echo $data['id_penandatangan']; ?>"><?php echo $data['nama_penandatangan']; ?></option>  
                            <?php    
            }
            ?>
                                    </select>
                            </span>
                        </p>
                        
                        <p>
                            <label>Tanggal*</label>
                            <span class="field"><input name="tanggal" type="date" id="tanggal" class="date" /></span>
                        </p> 
                        <p>
                        	<label>Keterangan *</label>
                            <span class="field"><input name="keterangan" type="text" id="keterangan" class="longinput" /></span>
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