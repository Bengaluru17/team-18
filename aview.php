<html>
    <body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;">
        <div style="width:100%; height:auto; background-color: rgba(0,0,0,0.5); ">
            <center>  <h1 style="color: rgba(0,0,0,0.1);"> STUDENT ATTENDANCE </h1></center>
        </div>
        <div style="  height: 100%; background-position-x: 200px;background-position-y: 300px;">
            <BR />
            <br />
            <br />
            
            
            <CENTER> <table border="border">
<tr>
<th><center><br /><b>SID</b></center></th>
    
     
     <th><center><br /><b>ATTENDANCE</b></center></th>
     
            
</tr>
<tr>
    <?php
include("setup.php");
   session_start();


$qu=mysqli_query($db,"select sid,count(sid) from attstud group by sid");

    while($row1 = $qu->fetch_assoc()) {
            
            echo "<td>".$row1['sid']."</td>";
       
       echo "<td>".$row1['count(sid)']."</td>";
       
       
       
    }
   
?>
    </td> 
</table> 
            </center>
             </div>
   </body> 
</html>