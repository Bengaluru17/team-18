
<html>
    <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
        <body style="background-image:url('bg_1.jpg');background-repeat:no-repeat;background-size:cover">

<nav class="navbar navbar-inverse" style="background-color:#506650;border:0">
  <div class="container-fluid">
    <div class="navbar-header">
    <CENTER><h1 style="color:#EEEEEE;"> Update Inventory </h1>
        
    </div>
    </nav>    
    </
        </div>
    <a href="staff.php">Home</a>
        <div style="  height: 100%; background-position-x: 200px;background-position-y: 300px;">
            <BR />
            
            <br />
            <br />
            
            <center><p style="color:#ffffff"> Enter positive integers to add items, negative integers to remove</p>
            <center><table border="border" style="background-color:#FFFFFF;">
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
       
       echo "<td><input type='number' maxlength='2' name='a' id='a'> </td>";
       echo "</tr>";
      
    
      
       
       mysqli_query($db,"insert into orders values('',1,".$row1['quantity'].",".$row1['section'].")");

      //mysqli_query($db,$qu1);
       
    }
    
      
       
    
   
?>
     
</table> 
                <input type="submit" />
               
            </center>
             </div>
    
   </body> 
</html>

