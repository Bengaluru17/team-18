<div style="height:20% width:100%">
    <a href="staff.php"><h4>Home</h4></a>
</div> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
table {
    border-collapse: collapse;
    width: 50%;
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
echo "</tr>";
      echo "<td>".$row1['lid']."</td>";
       echo "<td>".$row1['name']."</td>";
      echo "</tr>";
       } 
?>
 </td> 
</table></br>


<html>
    <body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;">
       <form action="" method="POST"> 
    <div class="form-group"> 
      <label for="sid">Enter Lid</label> 
      <input required type="number" class="form-control" id="lid" placeholder="lid" name="lid"> 
    </div> 
    <button type="submit" class="btn btn-default">Submit</button> 
    </form>
    </body>
</html>
<?php 
//include("setup.php"); 
   //session_start();  
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $sid = mysqli_real_escape_string($db,$_POST['lid']); 
       
       $sql = "INSERT INTO attstaff(lid,time) values('$sid',sysdate())"; 
           if(mysqli_query($db, $sql)) { 
            echo "New record created successfully  "; 
   } 
   }
?>   
   

