<?php

	$id= $_POST['id'];
	
$conn= new mysqli('localhost','root','','petrol_pump');

if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
else
{

	$q = $conn->prepare("delete from worker where id=$id");
	//$q->bind_param("issi",$id,$name,$addr,$no);

;	
	$q->execute();
	
		echo '<script> alert("Record deleted") </script>';
		echo "<a href=delworker.html>BACK</a>";
	//	
	$q->close();
	$conn->close();
}
?>


