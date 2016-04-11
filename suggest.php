<script>
function validation()
{
  var suggestion = document.getElementById('wysiwyg').value;
 

  if( suggestion == "")
  {
    alert('Suggestion field can not be left empty.');
	return false;
  }
  
  else
  {
   
	return true;
  }
  
}
</script>
<?php
include('conn.php');
session_start();

$userid=$_SESSION['userid'];

if(isset($_POST['submit'])){
$type=$_POST['type'];
$number=$_POST['number'];
$suggestion=$_POST['suggestion'];
mysql_query("insert into suggestions(user,type,number,suggestion,time)values('$userid','$type','$number','$suggestion','NOW()')");
$ps1=mysql_query("SELECT * FROM suggestions ORDER BY id DESC LIMIT 1");	
$ps2 = mysql_fetch_array($ps1);
$tem=$ps2['id'];
mysql_query("update suggestions set time=now() where id=$tem");
?><script>
alert("your suggestion has been noted");
window.location.replace("dash.php");
</script>
<?php
}
?>

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
	 <!-- Form elements -->    
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>Suggestion/Change form:</span></h2>
                        
                     <div class="module-body">
                        <form method="post" onSubmit="return validation()">
                        
                            
                            <p>
                                <label>Type:</label>
                                <select class="input-short" name="type">
                                    <option value="1">General Suggestion</option>
									<option value="2">Jobs</option>
                                    <option value="3">Internship</option>
                                    <option value="4">Workshops/Seminars</option>
                                    <option value="5">Course Offerings</option>
                                </select>
                            </p>
							
							    <p>
                                <label>Entry number:</label>
                                <select class="input-short" name="number">
                                  <?php for($i=1;$i<=100;$i++){?> 
				  <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php } ?>
								</select>
                            </p>
                         
                            <fieldset>
                                <label>Change/Suggestion:</label>
                                <textarea id="wysiwyg" rows="11" cols="90" name="suggestion">    </textarea> 
                            </fieldset>
                            
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
                