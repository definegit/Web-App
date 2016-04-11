
<?php
include('conn.php');
session_start();
$userid=$_SESSION['userid'];
$pass = $_SESSION['pass'];
?>
<script>
function validation()
{
  var pass1 = document.getElementById('pass1').value;
  var pass2 = document.getElementById('pass2').value;
  var pass3 = document.getElementById('pass3').value;

  if( pass1 == "")
  {
    alert('plz enter your current password');
	return false;
  }
  else if( pass1 != <?php echo $pass ?>)
  {
    alert('current password do not match');
	return false;
  }
  else if( pass2 == "")
  {
    alert('plz enter your new password');
	return false;
  }
    
  else if( pass2 != pass3)
  {
    alert('new Password and re-entered password do not match!');
	return false;
  }
  
  else
  {
   
	return true;
  }
  
}
</script>
<?php
if(isset($_POST['submit'])){
$npass=$_POST['pass3'];
mysql_query("update users set pass='$npass' where userid='$userid'");
?>
	<script type="text/javascript" >
alert ("password updated!");
 window.location="dash.php";
</script>
<?php

}

?>
<html>
<head>
<title>LNMIIT IRM login</title>

   <?php include("scripts.php"); ?>
	
	
	
</head>

<body>

<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_8">
					&nbsp;
                    </div>
                    <div class="grid_4">
                        <a href="home.php" id="logout">
                        logout
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <marquee direction="right" scrollamount="5" loop="100" behavior="slide" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 5, 0);">
<ul>
  <li><a href="http://www.lnmiit.ac.in" target="_blank">Welcome to the LNMIIT industry relations manager</a></li>  </marquee>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
                
                <!-- Example table -->
                    
                    <div class="module-table-body" style="width:300px; margin:0 auto;">
                    	
                        <!-- Password -->
            <div class="grid_6" >
                <div class="module" >
                     <h2><span>Update password</span></h2>
                        
                     <div class="module-body">
                        <form method="post" onSubmit="return validation()">

							<p>
                                <label>current Password</label>
                                <input type="password"  id="pass1" name="pass1" required/>
                            </p>
							
                            <p>
                                <label>new Password</label>
                                <input class="input-medium password" name="pass2" type="password"  id="pass2" required/>
                            </p>
							
							<p>
                                <label>confirm passowrd</label>
                                <input type="password"  name="pass3" id="pass3" required/>
                            </p>
                            
							<fieldset>
                                <input class="submit-green" type="submit" value="udpate" name="submit" /> 
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
