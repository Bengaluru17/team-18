<html>
    <body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;">
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div style="height:20% width:100%">
    <a href="main.php"><h4>Home</h4></a>
</div>  
<div style="overflow-x:auto;">   <center>
 <table border="border">
<tr>
<th><center><br /><b>OID</b></center></th>
     <th><center><br /><b>QUANTITY</b></center></th>
     <th><center><br /><b>SECTION</b></center></th>       
</tr>
<?php
   include('setup.php');
   session_start();
  
  
      // username and password sent from form 
      $qu=mysqli_query($db,"SELECT * FROM orders where pending='0'");
//  $sql3="select * from student where sid=1";
//$result = mysqli_query($db,$sql3);

         
  while($row1 = $qu->fetch_assoc()) { 
      echo "<tr>";
       echo "<td>".$row1['oid']."</td>";
       //echo "<td>".$row1['lid']."</td>";
       echo "<td>".$row1['quantity']."</td>";
       echo "<td>".$row1['section']."</td>";
       echo "</tr>";
     
    }
   
    ?>
 </table>
    </center>
       <form action="" method="POST"> 
    <div class="form-group"> 
      <label for="sid">Enter ORDER id</label> 
      <input required type="number" class="form-control" id="oid" placeholder="oid" name="oid"> 
    </div> 
       
    <button type="submit" class="btn btn-default">Submit</button> 
    </form>
    </body>
   
</html>

<?php 
//include("setup.php"); 
   //session_start();  
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $oid = mysqli_real_escape_string($db,$_POST['oid']); 
       
       //$sql = "INSERT INTO at(sid,time) values('$sid',sysdate())"; 
       $sql="UPDATE orders set pending=1 where oid=$oid";
           if(mysqli_query($db, $sql)) { 
            echo "<script>alert('New record created successfully'); windows.href.location='pending.php'</script>  "; 
   } 
   }
?>   