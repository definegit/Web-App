	
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
                        Logout</a>
						        
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
							    <?php       if($userid=='dean'){  ?>
								<li ><a href="dash.php">Dashboard</a></li>
								<li ><a href="jobs_dean.php">Jobs</a></li>
                                <li><a href="intern_dean.php">Internships</a></li>
                         <li><a href="work_dean.php">workshops/seminars</a></li>
                          <li><a href="course_dean.php">Course offerings</a></li>				                                                     <?php     }  
						  				   else {  ?>
								<li ><a href="dash.php">Dashboard</a></li>
								<li ><a href="jobs_users.php">Jobs</a></li>
                                <li><a href="intern_users.php">Internships</a></li>
                  <li><a href="work_users.php">workshops/seminars</a></li>
                                <li><a href="course_users.php">Course offerings</a></li>				                                                        <?php   }   ?>
											     	
						  </ul>
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
        