<?php

	$conn = new Mysqli("localhost", "root", "", "petrol_pump");

	$sql = "select * from worker";

	$result = $conn->query($sql);

	echo "<table border=2 align=center> <h1><center>WORKER REPORT </center></h1>";

	echo "<tr> <th>ID</th> <th>Worker Name</th> <th>address</th> <th>Phone</th></tr>";




	if($result->num_rows > 0)
{

	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[addr]</td><td>$row[no]</td> </tr>";

	}
	
}

echo "</table>";


?>