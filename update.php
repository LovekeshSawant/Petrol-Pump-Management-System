<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>


<?php

	$id= $_POST['id'];
	$type= $_POST['type'];
	$qnt = $_POST['qnt'];
	
$db = mysqli_connect('localhost', 'root', '', 'petrol_pump');

	if(!$db)
		echo "Database Error";
	$query = "insert into up values('$id', '$type', '$qnt')";

	$result = mysqli_query($db, $query);

	if(!$result)
		echo "Error in insertion";
	else
	{
		echo '<script> alert("Stock Updated") </script>';
		echo "<a href=update.html>BACK</a>";
	//	header("location:addcust.html");
	}
	
?>


