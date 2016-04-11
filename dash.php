<?php 
	  include('conn.php');
	  session_start();
	  $userid= $_SESSION['userid'];?>
<html>
	<head>
	
	<style>
	#subn {
	   
    height: 48px;}
	</style>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>LNMIIT IRM</title>
       <?php include("scripts.php"); ?>
       
	</head>
	<body>
    <?php include("header_users.php"); ?>
                <div id="subn">
				<strong style="margin-left:40%; font-size:18px; color:#0063be;"><?php echo "Welcome ".$userid." !!"?></strong>
				</div><!--end subn-->
               <!-- Dashboard icons -->
            <div class="grid_7">
			<?php if($userid=='dean')  {?>
            	<a href="apply_suggest.php" class="dashboard-module">
							<?php } ?>
							<?php if($userid!='dean')  {?>
            	<a href="suggest.php" class="dashboard-module">
							<?php } ?>
			   <img src="Crystal_Clear_write.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_write.gif" width="64" height="64" alt="edit" />
                	<span>Suggestions</span>
                </a>
                 
                <a href="update_pass.php" class="dashboard-module">
                	<img src="Crystal_Clear_settings.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_settings.gif" width="64" height="64" alt="edit" />
                	<span>Change password</span>
                </a>
                <div style="clear: both"></div>
            </div> <!-- End .grid_7 -->
                
               	
		<?php include("footer.php"); ?>
</body>
</html>