<head>

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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div style="overflow-x:auto;">   
 <table border="border">
<tr>
<th><center><br /><b>IID</b></center></th>
     <th><center><br /><b>NAME</b></center></th>+
     <th><center><br /><b>QUANTITY</b></center></th>
     <th><center><br /><b>SECTION</b></center></th>
     
            
</tr>
<tr>
    <?php
include("setup.php");
   session_start();
$qu=mysqli_query($db,"SELECT * FROM inventory");
//  $sql3="select * from student where sid=1";
//$result = mysqli_query($db,$sql3);
 
         
  while($row1 = $qu->fetch_assoc()) { 
      echo "<tr>";
       echo "<td>".$row1['iid']."</td>";
       echo "<td>".$row1['name']."</td>";
       echo "<td>".$row1['quantity']."</td>";
       echo "<td>".$row1['section']."</td>";
       echo "</tr>";
     
    }
   
?>
    </td> 
</table> 
</div>
<div class="row content" style="text-align:center;margin-top:50px">
	<div class="col-lg-4 ">
	<button type="button" class="btn btn-primary" style="font-size:250%">
            <a href="addtocart.php" style="color:#eeeeee">Take From Inventory</a>
	</button>
    	</div>
        <div class="col-lg-4">

	<button type="button" class="btn btn-primary" style="font-size:250%">
            <a href="invent.php" style="color:#eeeeee">Add To Inventory</a>
	</button>
    	</div>
