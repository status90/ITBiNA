<?php
try {
	$server = "mysql2.000webhost.com";
	$username = "a6422285_itbina";
	$password = "itbina123";
	$database = "a6422285_itbina";

	$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
	
	mysql_select_db($database, $con);
	
	$title = mysql_real_escape_string($_POST["title"]);
	$comment = mysql_real_escape_string($_POST["comment"]);
	
	mysql_query("INSERT INTO posts (post_title, post_content) VALUES ('$title', '$comment')");
	
	mysql_close($con);
	echo "success";
	
	require("instapush.class.php");
	$ip = new instapush();
	$ip->App('546a4938a4c48a6131a7a0c0', '170f764836e7462e61613bed4d4b5f9c');
	$ip->Event('announce');
	$ip->trackers('title',$_POST['post_title'],'comment',$_POST['post_content']);
	$ip->Push();
	}
catch(Exception $e)
	{
	echo $e->getMessage();
	}
	
?>
