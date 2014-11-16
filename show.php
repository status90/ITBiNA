<?php
	try {
		$server = "mysql2.000webhost.com";
		$username = "a6422285_itbina";
		$password = "itbina123";
		$database = "a6422285_itbina";
		
		$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
		mysql_select_db($database, $con);
		
		$sql = "SELECT * FROM posts ORDER BY post_date DESC";
		$result = mysql_query($sql) or die ("Query error: " . mysql_error());
	
		while($row = mysql_fetch_array($result)) {
			echo "<li><h4 STYLE='text-transform: uppercase'>".$row['post_title']."</h4><p><font style='word-wrap: break-word;'><pre><br>".$row['post_content']."</pre></p></font><br><p class='ui-li-aside'><br>".$row['post_date']."</p><hr></li>";
		}
		mysql_close($con);
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
?>	
