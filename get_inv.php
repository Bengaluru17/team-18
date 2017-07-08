<?php
include("setup.php"); 
   session_start(); 
//$con=mysqli_connect("localhost","root","","reachout");
// Check connection


// Perform queries
$qu=mysqli_query($db,"SELECT * FROM inventory");
//mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
//VALUES ('Glenn','Quagmire',33)");
 while($row = mysql_fetch_array($qu, MYSQL_ASSOC)) {
      echo "IId :{$row['iid']}  <br> ".
         "Name : {$row['name']} <br> ".
         "Quantity : {$row['quantity']} <br> ".
         "Section : {$row['section']} <br> ";
   }


//mysqli_close($con);
?>
