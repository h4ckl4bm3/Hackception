<?php

if( isset( $_POST[ 'submit' ] ) ) {

        $target = $_POST[ 'ip' ];
	$string = preg_replace('/\s+/', '', $target);
	
	if($string== '127.0.0.1' || $string=='127.0.0.1; ls' || $string=='127.0.0.1; cat flag.txt'
		|| $string=='127.0.0.1;ls' || $string=='127.0.0.1;cat flag.txt' || $string==';ls' || 
		$string==';cat flag.txt' ||  $string =='; cat flag.txt' || $string==';catflag.txt')
	{
        // Determine OS and execute the ping command.
        if (stristr(php_uname('s'), 'Windows NT')) {

                $cmd = shell_exec( 'ping  ' . $target );
                $html .= '<pre>'.$cmd.'</pre>';

        } else {

	
              $cmd = shell_exec( 'ping  -c 3 ' . $target );
               $html .= '<pre>'.$cmd.'</pre>';
		echo $html;

        }
		}
	else
	{
		echo "Try only localhost";
	}

}
?>
<h2>ping for FREE</h2>

                <p>Enter an IP address below:</p>
                <form name="ping" action="#" method="post">
                        <input type="text" name="ip" size="30">
                        <input type="submit" value="submit" name="submit">
                </form>
                

