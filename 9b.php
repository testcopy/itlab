<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="anvitha";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
	echo "connecton error";
else
{
  $sql="SELECT * FROM `score` WHERE 1";

  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)>0)
  {
  	while($row=mysqli_fetch_assoc($result))
  	{
  		echo $row["subject"]."  ".$row["grade"]."   " .$row["name"]."<br>";
  	}
  }

   $sql="SELECT name FROM `score` WHERE grade='s' and subject='java'";

  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)>0)
  {
  	while($row=mysqli_fetch_assoc($result))
  	{
  		echo $row["name"]."<br>";
  	}
  }
    $sql="SELECT count(name) FROM `score` WHERE grade='F' and subject='java'";

  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)>0)
  {
  	while($row=mysqli_fetch_assoc($result))
  	{
  		echo $row["count(name)"];
  	}
  }
    


}
?>
</html>
