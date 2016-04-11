
<?php
include('conn.php');
session_start();

$userid=$_SESSION['userid'];

if(isset($_POST['submit'])){;
$type=$_POST['type'];
$company=$_POST['company'];
$stipened=$_POST['stipened'];
$vacancies=$_POST['vacancies'];
$date=date('Y-m-d', strtotime($_POST['date']));
$remark=$_POST['remark'];
$file_name=$_FILES['fileToUpload']['name'];
$path="uploads/".$file_name;
include("upload.php");
$r=mysql_query("insert into intern(company,type,stipened,date,vacancies,remarks,docs)values('$company','$type','$stipened','$date','$vacancies','$remark','$path')");
?><script>
alert("new entry has been created");
window.location.replace("intern_dean.php");
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
                              
							Company name:<br>
							<input type="text" name="company" class="mytext" required>
							<br>  </fieldset>
							
							 <fieldset>
							Internship type:<br>
							<input type="text" name="type" class="mytext" required>
                            </fieldset>
							
							 <fieldset>
                              
							Stipened(in thousand/month INR):<br>
							<input type="text" name="stipened" class="mytext" required>
							<br>  </fieldset>
							
							  <fieldset>
                              
							Last date ( Y,M,D seperated by '-' ):<br>
							<input type="text" name="date" class="mytext" required>
							<br>  </fieldset>
							 
		      				  <fieldset>
                              
							Vacancies:<br>
							<input type="text" name="vacancies" class="mytext" required>
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
                