 
 <table border="border">
<tr>
<th><center><br /><b>Lid</b></center></th>
     <th><center><br /><b>NAME</b></center></th>
     
    
     
            
</tr>
<tr>
    <?php
include("setup.php");
   session_start();
   
$qu=mysqli_query($db,"SELECT lid,name FROM staff");
//  $sql3="select * from student where sid=1";
//$result = mysqli_query($db,$sql3);
 
         
  while($row1 = $qu->fetch_assoc()) { 

      echo "<td>".$row1['lid']."</td>";
       echo "<td>".$row1['name']."</td>";
      
       } 
?>
 </td> 
</table></br>


<html>
       <form action="" method="POST"> 
    <div class="form-group"> 
      <label for="sid">Enter Lid</label> 
      <input required type="number" class="form-control" id="sid" placeholder="Sid" name="sid2"> 
    </div> 
    <button type="submit" class="btn btn-default">Submit</button> 
    </form>
</html>
<?php 
//include("setup.php"); 
   //session_start();  
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $sid = mysqli_real_escape_string($db,$_POST['sid2']); 
       
       $sql = "INSERT INTO attstaff(lid,time) values('$sid',sysdate())"; 
           if(mysqli_query($db, $sql)) { 
            echo "New record created successfully  "; 
   } 
   }
?>   
   

