<?php
    try
    {
        $connection = mysql_connect("server12.000webhost.com","a6422285_itbina","itbina123");
        mysql_select_db("a6422285_itbina", $connection);
        // Note: You need to verify the data coming in isn't harmful, this SQL pretty much puts anything into the database so make sure to change this!
        $postTitle = mysql_real_escape_string($_POST[postTitle]);
        $postContent = mysql_real_escape_string($_POST[postContent]);
 
        mysql_query("INSERT INTO posts (post_title, post_content) VALUES ('$postTitle', '$postContent')");
        mysql_close($connection);
        echo "SUCCESS";
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
        // Note: Log the error or something
    }
?>
