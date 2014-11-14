<?php
	try {
		$server = "mysql2.000webhost.com";
		$username = "a6422285_itbina";
		$password = "itbina123";
		$database = "a6422285_itbina";

		$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
		mysql_select_db($database, $con);

		$sql = "SELECT * FROM posts ORDER BY post_id DESC";
		$result = mysql_query($sql) or die ("Query error: " . mysql_error());
	
		while($row = mysql_fetch_array($result)) {
			echo "<h4>Title: ".$row['post_title']."</h4><p>".$row['post_content']."</p><p>".$row['post_date']."</p>";
		}

		mysql_close($con);
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
?>
