<?php

	$a= $_POST['a'];
	
$db = mysqli_connect('localhost', 'root', '', 'petrol_pump');

	if(!$db)
		echo "Database Error";
	$query = "delete from customer where no=$a";

	$result = mysqli_query($db, $query);

	if(!$result)
		echo "Error in deletion";
	else
		echo '<script> alert("Record Deleted") </script>';
		echo "<a href=delcust.html>BACK</a>";

	
?>


