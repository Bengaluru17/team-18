<html>
    <body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;">
        <div style="width:100%; height:auto; background-color: rgba(0,0,0,0.5); ">
            <center>  <h1 style="color: rgba(0,0,0,0.1);"> STUDENT DETAILS </h1></center>
        </div>
        <div style="  height: 100%; background-position-x: 200px;background-position-y: 300px;">
            <BR />
            
            <br />
            <br />
            
            
            <CENTER> <table border="border">
<tr>
<th><center><br /><b>IID</b></center></th>
     <th><center><br /><b>NAME</b></center></th>
     <th><center><br /><b>QUANTITY AVAILABLE</b></center></th>
     <th><center><br /><b>QUANTITY REQUIRED</b></center></th>
    
     
            
</tr>

<tr>
    <?php
include("setup.php");
   session_start();
//$eid=$_GET['name'];
$qu=mysqli_query($db,"SELECT * FROM inventory");
//  $sql3="select * from student where sid=1";
//$result = mysqli_query($db,$sql3);
 
         
  while($row1 = $qu->fetch_assoc()) {    
      echo "<tr>";
     
       echo "<td>".$row1['iid']."</td>";
       echo "<td>".$row1['name']."</td>";
       echo "<td>".$row1['quantity']."</td>";
       
       echo "<td><input type='text' maxlength='2' name='a'> </td>";
       echo "</tr>";
     
    }
    
      
       
    
   
?>
     
</table> 
                <input type="submit" />
               
            </center>
             </div>
   </body> 
</html>

