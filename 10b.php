<?php

	$file = fopen("out.txt","r");

	$count = 0;
	while(!feof($file))
	{
		$t = fgets($file);
		$count = $count +1 ;

	}

	echo $count;
?>

