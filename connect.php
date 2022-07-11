<?php
/*$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn=new mysqli($servername,$username,$password);
*/
// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

$conn= new mysqli('localhost','root','','petrol_pump');

if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
else
{

	$q = $conn->prepare("insert into customer(a,b,c,d,e) values(?, ?, ?, ?, ?)");
	$q->bind_param("isiii",$a,$b,$c,$d,$e);

	
	$q->execute();
	echo "Record Inserted";
	
	$q->close();
	$conn->close();
}
