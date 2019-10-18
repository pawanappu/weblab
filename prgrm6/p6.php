<?php
	$fp = fopen("text.txt","r");
	$count = fread($fp,10);
	fclose($fp);
	$count = $count+1;
	echo "<p> Number of page views is " .$count . "</p>";
	$fp = fopen("text.txt","w");
	fwrite($fp,$count);
	fclose($fp);
?>