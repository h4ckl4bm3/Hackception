<?php
	require_once("config.inc.php");
	$connection = mysql_connect(DB_HOST,DB_USER, DB_PASSWORD);
	if (!$connection)
	{
	    die("Database Connection Failed" . mysql_error());
	}	
	$select_db = mysql_select_db(DB_NAME);
	if (!$select_db)
	{
		die("Database Selection Failed" . mysql_error());
	}
?>
