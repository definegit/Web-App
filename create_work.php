
<?php
include('conn.php');
session_start();

$userid=$_SESSION['userid'];

if(isset($_POST['submit'])){;
$topic=$_POST['topic'];
$org=$_POST['org'];
$duration=$_POST['duration'];
$seats=$_POST['seats'];
$date=date('Y-m-d', strtotime($_POST['date']));
$remark=$_POST['remark'];
$batches=$_POST['batches'];
$file_name=$_FILES['fileToUpload']['name'];
$path="uploads/".$file_name;
include("upload.php");
$r=mysql_query("insert into workshops(org,topic,duration,date,seats,remarks,batch,docs)values('$org','$topic','$duration','$date','$seats','$remark','$batches','$path')");
?><script>
alert("new entry has been created");
window.location.replace("work_dean.php");
</script>
<?php
}
?>

<html>
	<head>
	
	
	
	
	<style>
	.mytext {
    width: 500px;
}
	
		#dabba{
			background: rgba(0, 0, 0, 0) url("module-header-right-bg.gif") no-repeat scroll right top;
			display: block;
			line-height: 20px;
			margin-left: -10px;
			padding: 4px 150px 10px 34px;
							}
	
	
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
	 <!-- Form elements -->    
            <div class="grid_12">
            
                <div class="module" >
                     <h2><span> Creation/Modification form:</span></h2>
                        
                     <div class="module-body" id="dabba">
                        <form method="post" enctype="multipart/form-data">
                            
                            <fieldset>
                              
							Organization name:<br>
							<input type="text" name="org" class="mytext" required>
							<br>  </fieldset>
							
							 <fieldset>
							Topic:<br>
							<input type="text" name="topic" class="mytext" required>
                            </fieldset>
							
							 <fieldset>
                              
							Duration(in hours):<br>
							<input type="text" name="duration" class="mytext" required>
							<br>  </fieldset>
							
							  <fieldset>
                              
							Date ( Y,M,D seperated by '-' ):<br>
							<input type="text" name="date" class="mytext" required>
							<br>  </fieldset>
							 
		      				  <fieldset>
                              
							Seats:<br>
							<input type="text" name="seats" class="mytext" required>
							<br>  </fieldset>
							 
							  <fieldset>
                              
							  <fieldset>
                              
							Batches invited ( seperated by comma):<br>
							<input type="text" name="batches" class="mytext" required>
							<br>  </fieldset>
							 
							  <fieldset>
							  
							  
							Remark:<br>
							<input type="text" name="remark" class="mytext">
							<br>  </fieldset>
							 
							 <fieldset>
                              
							Documents:<br>
							<input  type="file" name="fileToUpload"  class="mytext">
							<br>  </fieldset>
							 
                            
                            <fieldset>
                                <input class="submit-green" type="submit" value="Submit" name="submit"/> 
                                <input class="submit-gray" type="submit" value="Cancel" />
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
			
			<?php include("footer.php"); ?>
                	</body>
                