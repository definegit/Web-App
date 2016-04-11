<?php
include('conn.php');
if(isset($_POST['submit'])){
session_start();
$userid=$_POST['userid'];
$pass=$_POST['pass'];
 $sql = "select * from users where userid='$userid' and pass='$pass'";
 $rs=mysql_query($sql);//execute query		
$rows = mysql_fetch_array($rs);// to get rows
if(mysql_num_rows($rs) >= 1){
	   	$_SESSION['userid']=$rows['userid'];
		$_SESSION['id']=$rows['id'];
		$_SESSION['pass']=$rows['pass'];
		header('location:dash.php');
		 				
	
							}
else {?>
	<script type="text/javascript">
	alert ("userid-ID and password did not match!");
	</script>
		<?php		}
	}
?>
<html>
<head>
<title>LNMIIT IRM login</title>
<script>
function validation()
{
  var userid = document.getElementById('userid').value;
  if( userid == "")
  {
    alert('plz enter your userid');
	return false;
  }
  return true;
}
</script>


 <?php include("scripts.php"); ?>
</head>

<body>

 <?php include("header.php"); ?>
        
                
                <!-- Example table -->
                    
                    <div class="module-table-body" style="width:300px; margin:0 auto;">
                    	
                        <!-- Password -->
            <div class="grid_6" >
                <div class="module" >
                     <h2><span>Login Details</span></h2>
                        
                     <div class="module-body">
                        <form method="post" onSubmit="return validation()">

							<p>
                                <label>UserID:</label>
                                <input type="text" name="userid" id="userid" >
                            </p>
                            <p>
                                <label>Password:</label>
                                <input type="password" name="pass" id="pass"/>
                            </p>
                            
							<fieldset>
                                <input class="submit-green" type="submit" value="login"  name="submit"/> 
                                <input class="submit-gray" type="reset" value="Cancel" />
                           </fieldset>
                        </form>
                        
                     </div> <!-- End .module-body -->
                </div> <!-- End .module -->
                <div style="clear:both;"></div>
            </div> <!-- End .grid_6 -->
            <div style="clear:both;"></div>




                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                
                
      	
			
        </div> 
			
			<!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                	<p>&copy;<a href="" title="">IRM software LNMIIT </a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
</body>
</html>
