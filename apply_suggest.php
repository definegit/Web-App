
<?php
include('conn.php');
session_start();
$userid=$_SESSION['userid'];
$pass = $_SESSION['pass'];
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
               
			   
			   
			    <!-- Example table -->
                <div class="module">
                	<h2><span>Suggestions recieved:</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:4%">#</th>
                                    <th style="width:12%">UserID</th>
                                    <th style="width:10%">Type</th>
                                <th style="width:10%">Entry no.</th>
									<th style="width:20%">Suggestion/change</th>
								   <th style="width:20%">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php 
		$ps=mysql_query("select * from  suggestions order by id desc");	
		while($pst= mysql_fetch_array($ps)){
						?>
							    <tr>
                        <td class="align-center"><?php echo $pst['id']?></td>
                                   <td><?php echo $pst['user']?></td>
                                    <td><?php 
									if($pst['type'] == '1')
									echo "General";
									else if ($pst['type'] == '2')
									echo "Jobs";
									else if($pst['type'] == '3')
									echo "Internships";
									else if($pst['type'] == '4')
									echo "Workshops/Seminars";
									else if($pst['type'] == '5')
									echo "Course Offerings";
	
									?></td>
                                    <td><?php echo $pst['number']?></td>
                                    <td><?php echo $pst['suggestion']?></td>
									 <td><?php echo $pst['time']?></a></td>
                                    
                                </tr>
                                       
						             <?php }?> 
								
                                </tbody>
                        </table>
                        </form>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="arrow-stop-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180.gif" alt="first"/>
                                <img class="prev" src="arrow-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="arrow.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow.gif" alt="next"/>
                                <img class="last" src="arrow-stop.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop.gif" alt="last"/> 
                                <select class="pagesize input-short align-center">
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                </div>
                            </form>
                        </div>
                        
                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
			   
			   
			   
			   
                
               	
		<?php include("footer.php"); ?>
</body>
</html>