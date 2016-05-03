<?php

	
		$name = $_POST["name"];
		$usn = $_POST["usn"];
		$email = $_POST["email"];
		$color = $_POST["color"];
		$date = $_POST["date"];
		$cgpa = $_POST["cgpa"];
			
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "anvitha";

		$sql  = "INSERT INTO `akhil`(`usn`, `name`, `date`, `cgpa`, `color`, `email`) VALUES ('$usn','$name','$date','$cgpa','$color','$email')";
		
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn)
		{
			echo "connection error";
		}
		else
		{

			if(mysqli_query($conn,$sql))
			{
				echo "Values entered";
			}
			else
			{
				echo "sql error";	
			}
		}

		echo "<table><tr><td>name</td><td>date</td><td>usn</td></tr>";


		$sql = "SELECT * FROM `akhil`";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>".$row["name"]."</td><td>".$row["date"]."<td/><td>".$row["usn"]."</td></tr><br/>";
			}
		}

		echo "</table>"

?>
