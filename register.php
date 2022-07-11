<?php
	session_start();
    $name = $_POST['n'];
	$username = $_POST['u'];
    $email = $_POST['e'];
	$password = $_POST['p'];

	$db = mysqli_connect('localhost', 'root', '', 'petrol_pump');

	if(!$db)
		echo "Database Error";
	$query = " insert into admin values('$name', '$username', '$email', '$password') ";

	$result = $db->query($query);

	if($result)
		header("location: login.php");
	else{
		header("location: refresh.php");
	}

?>