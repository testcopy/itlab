<?php

		$name=$_POST["name"];
		$budget=$_POST["budget"];
		$hero=$_POST["hero"];
		$heroine=$_POST["heroine"];

		$servername="localhost";
		$username="root";
		$password="";
		$dbname="movies";

		$conn=mysqli_connect($servername,$username,$password,$dbname);
		$sql="INSERT INTO `movie`(`name`, `budget`, `hero`, `heroine`) VALUES ('$name','$budget','$hero','$heroine')";
		
		if(!$conn)
		     {
			   echo "connection error";
		     }
		else
		   {
		       if(mysqli_query($conn, $sql))
		       	echo "value entered";
		       else
		       	echo "sql error";

		   }

         echo "<table><tr><td>name</td><td>budget</td><td>hero</td><td>heroine</td></tr>";

		   $sql="SELECT * FROM `movie` WHERE 1";
		   $result=mysqli_query($conn,$sql);
		   if(mysqli_num_rows($result)>0)
		   {  
		   	  while($row=mysqli_fetch_assoc($result))
		   			echo  "<tr><td>".$row["name"]."</td><td>".$row["budget"]."</td><td>".$row["hero"]."</td><td>".$row["heroine"]."</td></tr>";
             

		   }  
		   echo "</table>" ;
?>
