<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "anvitha";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn)
		{
			echo "connection error";
		}

	$sql = "SELECT * FROM `elective` WHERE 1";

	$result = mysqli_query($conn,$sql);

	echo "elective  -  registrations<br/>";
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo $row["name"]." - ".$row["registrations"]."<br/>";
		}
	}


	$sql = "SELECT * FROM `elective` WHERE registrations=0";

	$result = mysqli_query($conn,$sql);

	echo "<br/><br/>zero registrations <br/>elective  -  registrations<br/>";
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo $row["name"]." - ".$row["registrations"]."<br/>";
		}
	}


?>
</body>
</html>
