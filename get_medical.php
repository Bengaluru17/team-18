 <table border="border">
<tr>
<th><center><br /><b>SID</b></center></th>
     <th><center><br /><b>DETAIL</b></center></th>    
            
</tr>
<tr>
    <?php
include("setup.php");
   session_start();
$qu=mysqli_query($db,"SELECT * FROM medical");
//  $sql3="select * from student where sid=1";
//$result = mysqli_query($db,$sql3);
 
         
  while($row1 = $qu->fetch_assoc()) {          
       echo "<td>".$row1['sid']."</td>";
       echo "<td>".$row1['detail']."</td>";  
    }
   
?>
    </td> 
</table> 