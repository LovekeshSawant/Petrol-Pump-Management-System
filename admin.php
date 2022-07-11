<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = mysqli_connect('localhost', 'root', '', 'petrol_pump');

	if(!$db)
		echo "Database Error";
	$query = "Select * from admin where username='$username' and password='$password'";

	$result = $db->query($query);

	if(mysqli_num_rows($result))
		header("location: adminhome.html");
	else{
		header("location: refresh.php");
	}

?>


