<?php
	include('conn.php');
	session_start();
	$userid=$_SESSION['userid'];
	if(isset($_REQUEST['q'])){
	$id=$_REQUEST['q'];
mysql_query("DELETE FROM jobs WHERE id= '$id'") ?>
