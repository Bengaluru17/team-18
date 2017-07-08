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
<html>
    <body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	 <center>  <h1 style="color: rgba(0,0,0,0.1);"> Take From Inventory </h1></center>
    </div>
   
  </div>
</nav>
           
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

