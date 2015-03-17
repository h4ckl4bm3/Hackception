<?php
if(isset($_POST['script']))
{
	

	$input = $_POST['script'];
	if($input=="<script>alert('flag');</script>" || $input=="<script>alert(\"flag\");</script>")
	{
		echo "<script>alert('flag: 4c5d4c8a14e58f263dfac5e24b9b8af0')</script>";
	}
	else
	{
		echo "<script>alert('Try again')</script>";
	}

}

?>
<html>
<body>
<div align="center">
<form action='' method='POST'>
<br><br>
<input type="text" name='script' placeholder='Alert Me'/>
<input type='submit' name='submit' value='submit' />
</div>
</body>
</html>


