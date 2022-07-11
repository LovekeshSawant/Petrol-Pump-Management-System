<?php

	$id= $_POST['id'];
	$name = $_POST['name'];
	$addr = $_POST['addr'];
	$no = $_POST['no'];

$conn= new mysqli('localhost','root','','petrol_pump');

if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
else
{

	$q = $conn->prepare("insert into worker(id,name,addr,no) values(?, ?, ?, ?)");
	$q->bind_param("issi",$id,$name,$addr,$no);

	
	$q->execute();
	
		echo '<script> alert("Worker Inserted") </script>';

		header("location:adminhome.html");

	$q->close();
	$conn->close();
}
?>


