	
	<?php
	include('conn.php');
	session_start();
	$userid=$_SESSION['userid'];
	if(isset($_GET['q'])){
	$id=$_GET['q'];
	$rs=mysql_query("select * from jobs where id='$id'");
	$rs1 = mysql_fetch_array($rs);
							}
	if(isset($_POST['submitit'])){
	$id=$_GET['q'];
	$type=$_POST['type'];
	echo $type;
	$company=$_POST['company'];
	$package=$_POST['package'];
	$vacancies=$_POST['vacancies'];
	$date=date('Y-m-d', strtotime($_POST['date']));
	$remark=$_POST['remark'];
	$file_name=$_FILES['fileToUpload']['name'];
	$path="uploads/".$file_name;
	include("upload.php");
	mysql_query("UPDATE jobs SET company='$company',type='$type',package='$package',date='$date',vacancies='$vacancies',remarks='$remark',docs='$path' WHERE id='$id'");
							}
	?>
	<script type="text/javascript" >
alert ("information updated!");
window.location="jobs_dean.php";
</script>


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
   
	 <!-- Form elements -->    
            <div class="grid_12">
            
                <div class="module" >
                     <h2><span>Modification form:</span></h2>
                        
                     <div class="module-body" id="dabba">
                        <form method="post" enctype="multipart/form-data">
                            
                            <fieldset>
                              
							Company name:<br>
							<input type="text" name="company" class="mytext" placeholder="<?php echo $rs1['company']?>">
							<br>  </fieldset>
							
							 <fieldset>
							Job type:<br>
							<input type="text" name="type" class="mytext" placeholder="<?php echo $rs1['type']?>">
                            </fieldset>
							
							 <fieldset>
                              
							Package(in lakhs/annum INR):<br>
							<input type="text" name="package" class="mytext" placeholder="<?php echo $rs1['package']?>">
							<br>  </fieldset>
							
							  <fieldset>
                              
							Visit date ( Y,M,D seperated by '-' ):<br>
							<input type="text" name="date" class="mytext" placeholder="<?php echo $rs1['date']?>">
							<br>  </fieldset>
							 
		      				  <fieldset>
                              
							Vacancies:<br>
							<input type="text" name="vacancies" class="mytext" placeholder="<?php echo $rs1['vacancies']?>">
							<br>  </fieldset>
							 
							  <fieldset>
                              
							Remark:<br>
							<input type="text" name="remark" class="mytext" placeholder="<?php echo $rs1['remarks']?>">
							<br>  </fieldset>
							 
							 <fieldset>
                              
							Documents:<br>
							<input  type="file" name="fileToUpload"  class="mytext" placeholder="<?php echo $rs1['docs']?>">
							<br>  </fieldset>
							 
                            
                            <fieldset>
                                <input class="submit-green" type="submit" value="Submitit" name="submit"/> 
                                <input class="submit-gray" type="submit" value="Cancel" />
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
			
			
                	</body>
                