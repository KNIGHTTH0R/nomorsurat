<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../../images/logo_mig.jpeg"/> 
<title>Penomoran Surat MIG</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<script type="text/javascript" src="../js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="../js/custom/general.js"></script>
<script type="text/javascript" src="../js/custom/dashboard.js"></script>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body class="loggedin">

	<!-- START OF HEADER -->
	<div class="header radius3">
    	
		<?php include "../inc/header.php"; ?>
		
	</div><!--header-->
    <!-- END OF HEADER -->
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        <div class="mainleft">
          	<div class="mainleftinner">
            
              	<div class="leftmenu">
            		
					<?php include "menu.php"; ?>
                        
                </div><!--leftmenu-->
            	<div id="togglemenuleft"><a></a></div>
            </div><!--mainleftinner-->
        </div><!--mainleft-->
        
        <div class="maincontent">
        	<div class="maincontentinner">
            	
                <div class="content" align="center">

<br /><br />
               	  <ul class="widgetlist">
                    	<img width="600" height="320" src="../images/logo_mig.jpeg" /></a>
                  </ul>
                    
                    <br clear="all" /><br />
 
              </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <div class="footer">
            	<?php include "../inc/footer.php"; ?>
            </div><!--footer-->
            
        </div><!--maincontent-->
        
        <div class="mainright">
        	<div class="mainrightinner">
                <div class="widgetbox">
                                          
                                	<div class="title"><h2 class="calendar"><span>Calendar</span></h2></div>
                                    <div style="visibility:hidden; height:1px;"  id="chartplace" class="chartplace"></div> 
                             
                    <div class="widgetcontent padding0">
                    	<div id="datepicker"></div>
                                
                    </div><!--widgetcontent-->
                </div><!--widgetbox-->
         
                
            </div><!--mainrightinner-->
        </div><!--mainright-->
                
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

</html>