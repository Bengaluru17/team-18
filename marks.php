<html>
    <body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;">
        
        <div style="  height: 100%; background-position-x: 200px;background-position-y: 300px;">
            <div style="height:20% width:100%">
                <a href="accounts.php"><h4>Home</h4></a>
</div>  
            <BR />
            <br />
            <br />
          
            
            <CENTER> <table border="border">
<tr>
<th><center><br /><b>SID</b></center></th>
     <th><center><br /><b>NAME</b></center></th>
     <th><center><br /><b>DOB</b></center></th>
     <th><center><br /><b>CLASS</b></center></th>
     <th><center><br /><b>SCHOOL</b></center></th>
     <th><center><br /><b>AADHAR NO</b></center></th>
     <th><center><br /><b>GENDER</b></center></th>
     <th><center><br /><b>HOBBIES</b></center></th>
     
            
</tr>
<tr>
    <?php
include("setup.php");
   session_start();
//$eid=$_GET['name'];
$sql3="select * from student  ";
  //$sql3="select * from student where si=1";
$result = mysqli_query($db,$sql3);
 
         
   if ($result->num_rows){
      
            while($row1 = $result->fetch_assoc()){
         echo "<br /><tr>"   ;
       echo "<td>".$row1['sid']."</td>";
       echo "<td>".$row1['name']."</td>";
       echo "<td>".$row1['dob']."</td>";
       echo "<td>".$row1['class']."</td>";
       echo "<td>".$row1['school']."</td>";
       echo "<td>".$row1['aadhar']."</td>";
       echo "<td>".$row1['gender']."</td>";
       echo "<td>".$row1['hobbies']."</td>";
       echo "</tr>";
      
       
    }
   }
?>
     
</table> 
            </center>
             </div>
   </body> 
</html>