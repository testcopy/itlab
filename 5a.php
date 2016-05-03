<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input name="name"></input>
	<input name="usn"></input>
	<input type ="submit"></input>
</form>
</body>
</html>
<?php

if(isset($_POST["name"]))
{
  $str = $_POST["name"];
  $usn = $_POST["usn"];

  if(preg_match("/^[A-Za-z]+$/", $str))
  	{
  		echo "name".$str;

  	}
  	else
  		echo "invalid name";


  if(preg_match("/^[A-z0-9]+$/", $usn))
  	{
  		echo "<br>usn".$usn;
  	}
  	else
  		echo "<br>invalid usn";

}
?>
