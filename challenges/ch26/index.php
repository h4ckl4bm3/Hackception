
<?php
include_once dirname(__FILE__).'/../../init.php';
        session_start();
        require_once(HACKADEMIC_PATH."pages/challenge_monitor.php");
	require_once(HACKADEMIC_PATH."connect.php");
        require_once(HACKADEMIC_PATH."temp.php");

        $monitor->update(CHALLENGE_INIT, $_GET);
				$_SESSION['init'] = true;
				
if(isset($_GET['class_id']) && isset($_GET['id']) && isset($_GET['user_id']) && isset($_POST['submit']))
{
	$ans = $_POST['user-answer'];
	if($ans == 'hyderabad')
	{
		
		
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
			echo "Wow.! Congrats. Go ahead.";
		}
		else
		{	echo "You have already solved.Try some other challenges.";	}
	}

	else
	{	echo "Try Again.";
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

<br>
<p>ssh -a cse3c@172.17.153.41</p>
</p>password : cse9c</p>
<p>filename :  breach.zip</p>
<br>
<input type="text" name='user-answer' placeholder='answer'/>
<input type='submit' name='submit' value='submit' />
</div>
</body>
</html>

