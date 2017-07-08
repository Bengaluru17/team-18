<tr>
<td>Items</td>
<td>
<select name="name">
<?php
include("setup.php");
   session_start();
?>
<?php
$qu=mysqli_query($db,"SELECT * FROM inventory");

  while($row1 = $qu->fetch_assoc()) {   
 ?>              
       <option><?php echo $row1['name'];?></option>
       echo "<td>".$row1['name']."</td>";
       echo "<td>".$row1['quantity']."</td>";
       echo "<td>".$row1['section']."</td>";
       
     }   
<?php
}
?>
</td>
</tr>
