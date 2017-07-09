<html>
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
        <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <div style="height:20% width:100%">
    <a href="staff.php"><h4>Home</h4></a>
</div>
    <body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;">
        
        <div style="  height: 100%; background-position-x: 200px;background-position-y: 300px;">
<table border="border">
<tr>
<th><center><br /><b>LID</b></center></th>
     <th><center><br /><b>NAME</b></center></th>
     <th><center><br /><b>DOB</b></center></th>
     <th><center><br /><b>DOJ</b></center></th>
     <th><center><br /><b>EMAIL</b></center></th>
 
     
            
</tr>

<tr>
    <?php
include("setup.php");
   session_start();
//$eid=$_GET['name'];
$sql3="select * from staff  ";
  //$sql3="select * from student where si=1";
$result = mysqli_query($db,$sql3);
 
           
          
   if ($result->num_rows){
      
            while($row1 = $result->fetch_assoc()){
         echo "<br /><tr>"   ;
       echo "<td>".$row1['lid']."</td>";
       echo "<td>".$row1['name']."</td>";
       echo "<td>".$row1['dob']."</td>";
       echo "<td>".$row1['doj']."</td>";
       echo "<td>".$row1['email']."</td>";
     
       echo "</tr>";
      
       
    }
   }
?>
     
</table> 
            </center>
             </div>
   </body> 
</html>