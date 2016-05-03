//put in one file
<?php

	session_start();

	$_SESSION["t"] = "jack";

?>

// next file
<?php
	session_start();

	if(isset($_SESSION["t"]))
		{
			echo "logged in";
		}	
	else
		{
			echo "not logged in";
			header("Location: http://localhost/test/4a.php");
 
		}

	session_destroy();
?>

