 <table border="border">
<tr>
<th><center><br /><b>IID</b></center></th>
     <th><center><br /><b>NAME</b></center></th>
     <th><center><br /><b>QUANTITY</b></center></th>
     <th><center><br /><b>SECTION</b></center></th>
     
            
</tr>
<tr>
    <?php
include("setup.php");
   session_start();
$qu=mysqli_query($db,"SELECT * FROM inventory");
//  $sql3="select * from student where sid=1";
//$result = mysqli_query($db,$sql3);
 
         
  while($row1 = $qu->fetch_assoc()) {          
       echo "<td>".$row1['iid']."</td>";
       echo "<td>".$row1['name']."</td>";
       echo "<td>".$row1['quantity']."</td>";
       echo "<td>".$row1['section']."</td>";
       
     
    }
   
?>
    </td> 
</table> 

