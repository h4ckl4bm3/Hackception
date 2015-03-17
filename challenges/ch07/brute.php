
<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$connection = mysql_connect('localhost', 'root', 'amrita');
        if (!$connection)
        {
            die("Database Connection Failed" . mysql_error());
        }
        $select_db = mysql_select_db('bruteforce');
        if (!$select_db)
        {
                die("Database Selection Failed" . mysql_error());
        }
	
	$sql = "select * from user where username='$username' and pword='$password'";
	$res = mysql_query($sql) or  die(mysql_error());
	$r = mysql_num_rows($res);
	if($r)
	{
		echo "flag: 60b83f3895de9683e084c3a4985dc812";	}
	else	
	{	echo "try again.!";	}



}
	

?>

<div align="center">
<form action='' method='POST'>
<input name="username" placeholder='username' type="text">
<input name="password" placeholder="Password" type="password">
<input type='submit' name='submit' value='submit' />
</form>
</div>

