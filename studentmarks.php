<html>
        <head>
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
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <div style="height:20% width:100%">
    <a href="staff.php"><h4>Home</h4></a>
</div>
    <body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;">
        
        <div style="  height: 100%; background-position-x: 200px;background-position-y: 300px;">
            <BR />
            
            <br />
            <br />
            
            
            <CENTER> <table border="border">
<tr>
<th><center><br /><b>SID</b></center></th>
     <th><center><br /><b>CLASS 1</b></center></th>
     <th><center><br /><b>CLASS 2</b></center></th>
     <th><center><br /><b>CLASS 3</b></center></th>
     <th><center><br /><b>CLASS 4</b></center></th>
    <th><center><br /><b>CLASS 5</b></center></th>
       <th><center><br /><b>CLASS 6</b></center></th>
          <th><center><br /><b>CLASS 7</b></center></th>
             <th><center><br /><b>CLASS 8</b></center></th>
                <th><center><br /><b>CLASS 9</b></center></th>
                  <th><center><br /><b>CLASS 10</b></center></th>
                     <th><center><br /><b>CLASS 11</b></center></th>
                        <th><center><br /><b>CLASS 12</b></center></th>
                           
     
            
</tr>

<tr>
    <?php
include("setup.php");
   session_start();
//$eid=$_GET['name'];
$sql3="select * from marks  ";
  //$sql3="select * from student where si=1";
$result = mysqli_query($db,$sql3);
 
           
          
   if ($result->num_rows){
      
            while($row1 = $result->fetch_assoc()){
         echo "<br /><tr>"   ;
       echo "<td>".$row1['sid']."</td>";
       echo "<td>".$row1['c1']."</td>";
       echo "<td>".$row1['c2']."</td>";
       echo "<td>".$row1['c3']."</td>";
       echo "<td>".$row1['c4']."</td>";
        echo "<td>".$row1['c6']."</td>";
       echo "<td>".$row1['c7']."</td>";
       echo "<td>".$row1['c8']."</td>";
       echo "<td>".$row1['c9']."</td>";
        echo "<td>".$row1['c10']."</td>";
       echo "<td>".$row1['c11']."</td>";
       echo "<td>".$row1['c12']."</td>";
       
     
       echo "</tr>";
      
       
    }
   }
?>
     
</table> 
            </center>
             </div>
   </body> 
</html>
