<?php
include('conn.php');
session_start();
	$userid=$_SESSION['userid'];
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>LNMIIT IRM</title>
		
		
		
	<script>		
	function del(id){
	alert("entry deleted");
		var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		//window.location.replace("update_jobs.php");
		document.getElementById("my").innerHTML=xmlhttp.responseText;
		alert("entry deleted");
		}
	  }
	xmlhttp.open("GET","delete_jobs.php?q="+id,true);
	xmlhttp.send();
	}
	
	
					
	
	
			function update(id)
	{
		
		var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		//window.location.replace("update_jobs.php");
		document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		
		}
	  }
	xmlhttp.open("GET","update_jobs.php?q="+id,true);
	xmlhttp.send();
	}
	
	</script>

       <?php include("scripts.php"); ?>
	</head>
	<body>
		   <?php include("header_users.php"); ?>        
                <!-- Example table -->
                <div class="module">
                	<h2><span>Jobs:</span></h2>
                   
					
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:4%">#</th>
                                    <th style="width:12%">Company</th>
                                    <th style="width:12%">Job Type</th>
                                <th style="width:10%">Package(LPA)</th>
                                    <th style="width:8%">Visit Date</th>
                                       <th style="width:5%">Vacancies</th>
									<th style="width:20%">Remarks</th>
								   <th style="width:4%">Documents</th>
                                </tr>
                            </thead>
                            <tbody>
							 <?php 
		$ps=mysql_query("select * from jobs order by id desc");	
		while($pst= mysql_fetch_array($ps)){
						?>
                                <tr>
                           <td class="align-center"><?php echo $pst['id']?></td>
                                   <td><?php echo $pst['company']?></td>
                                    <td><?php echo $pst['type']?></td>
                                    <td><?php echo $pst['package']?></td>
                                    <td><?php echo $pst['date']?></td>
									 <td><?php echo $pst['vacancies']?></td>
                                    <td><?php echo $pst['remarks']?></td>
                 	<td><a href="<?php echo $pst['docs']?>">document</a></td>
                                     <td>
                                        <a href="#" onClick="del(<?php echo $pst['id']?>);"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
										
                                        <a href="#" onClick="update(<?php echo $pst['id']?>);"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>					</td>
										
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
                
                
                     <div id="myDiv"></div>
               
     
			<?php include("footer.php"); ?>
                	</body>
</html>