<?php
	try {
		$server = "mysql2.000webhost.com";
		$username = "a6422285_itbina";
		$password = "itbina123";
		$database = "a6422285_itbina";

		$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
		mysql_select_db($database, $con);

		$sql = "SELECT * FROM posts";
		$result = mysql_query($sql) or die ("Query error: " . mysql_error());
	
		while($row = mysql_fetch_array($result)) {
			echo "<li><h2>Title: ".$row['post_title']."</h2>".$row['post_content']."<p class='ui-li-aside'>".$row['post_date']."</p><hr>";
		}

		mysql_close($con);
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
?>
