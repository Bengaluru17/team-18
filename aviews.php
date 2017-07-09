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
        <div style="height:20% width:100%">
    <a href="main.php"><h4>Home</h4></a>
</div>  
        <div style="  height: 100%; background-position-x: 200px;background-position-y: 300px;">
            <BR />
            <br />
            <br />
            
            
            <CENTER> <table border="border">
<tr>
<th><center><br /><b>LID</b></center></th>
    
     
     <th><center><br /><b>ATTENDANCE</b></center></th>
     
            
</tr>
<tr>
    <?php
include("setup.php");
   session_start();


$qu=mysqli_query($db,"select lid,count(lid) from attstaff group by lid");

    while($row1 = $qu->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row1['lid']."</td>";
       
       echo "<td>".$row1['count(lid)']."</td>";
       echo "<tr>";
       
       
    }
   
?>
    </td> 
</table> 
            </center>
             </div>
   </body> 
</html>
