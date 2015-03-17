<?php
include_once dirname(__FILE__).'/../../init.php';
        session_start();
        require_once(HACKADEMIC_PATH."pages/challenge_monitor.php");
        $monitor->update(CHALLENGE_INIT, $_GET);
				$_SESSION['init'] = true;
				
if(isset($_GET['class_id']) && isset($_GET['id']) && isset($_GET['user_id']) && isset($_POST['submit']))
{
	$ans = $_POST['user-answer'];
	if($ans == 'sean parker')
	{
		$connection = mysql_connect('localhost', 'root','amrita');
		if (!$connection)
		{    die("Database Connection Failed" . mysql_error());	}	
		$select_db = mysql_select_db('hackanokha');
		if (!$select_db)
		{	die("Database Selection Failed" . mysql_error());	}
		
		$classid = $_GET['class_id'];
		$id = $_GET['id'];
		$userid = $_GET['user_id'];
		$sql = "select * from solved where user_id=$userid and challenge_id=$id";
		$result = mysql_query($sql) or die(mysql_error());
		$count = mysql_num_rows($result);
		if($count!=1)
		{		
			$monitor->update(CHALLENGE_SUCCESS, $_GET);
			$sq = "insert into solved values('$userid','$id')";
			$re = mysql_query($sq) or die(mysql_error());
			echo "successssfull..!";
		}
		else
		{	echo "u already solved.";	}
	}

	else
	{	echo "not workig";
		$monitor->update(CHALLENGE_FAILURE, $_GET);	}
}
?>

<html>
<head>
<style>
a:visited {color:#000000; background-color:transparent; text-decoration:none}
a:hover   {color:#00ff00; background-color:transparent; text-decoration:none}
</style>
<div align="center">
<form action='' method='POST'>
<p>
Same with ROTU's partner X. He too could not find music he was after on established sites. Music via the Internet was still the music that was marketed, not the ones he wanted to listen.So he founded Y. Identify X.
</p>
<br><br>
<input type="text" name='user-answer' placeholder='answer'/>
<input type='submit' name='submit' value='submit' />
</div>
</body>
</html>

