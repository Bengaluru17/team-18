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