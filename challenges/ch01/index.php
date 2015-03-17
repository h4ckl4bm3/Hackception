

<?php

include_once dirname(__FILE__).'/../../init.php';
        session_start();
        require_once(HACKADEMIC_PATH."pages/challenge_monitor.php");
	require_once(HACKADEMIC_PATH."connect.php");
	require_once(HACKADEMIC_PATH."temp.php");
	//require_once(HACKADEMIC_PATH."view/front.tpl");

        $monitor->update(CHALLENGE_INIT, $_GET);
				$_SESSION['init'] = true;
				
if(isset($_GET['class_id']) && isset($_GET['id']) && isset($_GET['user_id']) && isset($_POST['submit']))
{
	$ans = $_POST['user-answer'];
	if($ans == 'e7d0847685a324cd5e3ed36f83e793cf')
	{
		
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
			echo "wow.! congrats. Go ahead";
		}
		else
		{	echo "you  have already solved.Try some other questions";	}
	}

	else
	{	echo "Try again<br>";
		$monitor->update(CHALLENGE_FAILURE, $_GET);	}
}
?>


<div align="center">
<form action='' method='POST'>
<a href='eq3w45x23.xml' target='_blank'>Click here for link</a>
<br><br>
<input type="text" name='user-answer' placeholder='answer'/>
<input type='submit' name='submit' value='submit' />
</div>
</body>
</html>

