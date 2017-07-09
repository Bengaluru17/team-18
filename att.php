<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th,td {
    height:50px;
    padding:15px;
    vertical-align: bottom;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style> 
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
$qu=mysqli_query($db,"SELECT sid,name,class FROM student");
//  $sql3="select * from student where sid=1";
//$result = mysqli_query($db,$sql3);
 
         
  while($row1 = $qu->fetch_assoc()) {          
       echo "<td>".$row1['sid']."</td>";
       echo "<td>".$row1['name']."</td>";
       echo "<td>".$row1['class']."</td>";
          
     
    }
    <td>
    <form action="">
  <input type="checkbox" name="present" value="Bike"> present
  <input type="submit" value="Submit">
</form></td>
   
?>
    </td> 
</table> 

