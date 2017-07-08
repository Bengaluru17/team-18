<?php 
include("setup.php"); 
   session_start();  
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $sid = mysqli_real_escape_string($db,$_POST['sid']); 
       $height = mysqli_real_escape_string($db,$_POST['height']);
       $weight = mysqli_real_escape_string($db,$_POST['weight']);
       $date = mysqli_real_escape_string($db,$_POST['date']);
      

       $sql = "INSERT INTO health(sid,height,weight,dat) values('$sid','$height','$weight','$date')"; 
           if(mysqli_query($db, $sql)) { 
            echo "New record created successfully  "; 
   } 
   }
?> 
<html> 
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head> 

<body> 
     
<div class="container"> 

    <div class="jumbotron"> 
        <h1>Student Health Details</h1> 
    </div> 
   
      <form action="" method="POST"> 
    <div class="form-group"> 
      <label for="sid">sid</label> 
      <input required type="number" class="form-control" id="sid" placeholder="sid" name="sid"> 
    </div> 
    <div class="form-group"> 
      <label for="height">height</label> 
      <input required type="number" class="form-control" id="height" placeholder="height" name="height"> 
    </div> 
    <div class="form-group"> 
      <label for="weight">weight</label> 
      <input required type="number" class="form-control" id="weight" placeholder="weight" name="weight"> 
    </div>
     <div class="form-group"> 
      <label for="date">date</label> 
      <input required type="date" class="form-control" id="date" placeholder="date" name="date"> 
    </div>  
    
    <button type="submit" class="btn btn-default">Submit</button> 
  </form> 
</div> 

</body> 
</html>
