<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>


<?php

	$f= $_POST['f'];
	$a= $_POST['a'];
	$b = $_POST['b'];
	$c= $_POST['c'];
	$d = $_POST['d'];
	//$no = $_POST['no'];
	//$e = $_POST['e'];
	$total = $c * $d;
$db = mysqli_connect('localhost', 'root', '', 'petrol_pump');

	if(!$db)
		echo "Database Error";
	$query = "insert into customer values('$f', $a, '$b', $c, $d, $total)";

	$result = mysqli_query($db, $query);

	if(!$result)
		echo "Error in insertion";
	else
	{
		echo '<script> alert("Value Inserted") </script>';
		echo "<a href=addcust.html>BACK</a>";
	//	header("location:addcust.html");
	}
	
?>


