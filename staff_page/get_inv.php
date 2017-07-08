<?php
$con=mysqli_connect("localhost","root","","reachout");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries
$query=mysqli_query($con,"SELECT * FROM inventory");
//mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
//VALUES ('Glenn','Quagmire',33)");
echo query;
mysqli_close($con);
?>
