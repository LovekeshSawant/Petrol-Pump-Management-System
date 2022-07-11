<?php

	$date = $_POST['a'];
	$conn = new Mysqli("localhost", "root", "", "petrol_pump");

	$sql = "select * from customer where date='$date'";

	$result = $conn->query($sql);

	echo "<table border=2 align=center> <h1><center> REPORT </center></h1>";

	echo "<tr> <th>Date</th> <th>Customer No</th> <th>Type</th> <th>Rate</th> <th>Quantity in litre</th> <th>Total</th> </tr>";




	if($result->num_rows > 0)
{

	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>$row[date]</td><td>$row[no]</td><td>$row[type]</td><td>$row[rate]</td><td>$row[quantity]</td><td>$row[total]</td> </tr>";

	}
	
}

echo "</table>";


?>