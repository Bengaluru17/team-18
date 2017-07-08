<?php 
include("setup.php"); 
   session_start();  
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $sid = mysqli_real_escape_string($db,$_POST['sid']); 
       $issue = mysqli_real_escape_string($db,$_POST['issue']);
       

       $sql = "INSERT INTO medical(sid,detail) values('$sid','$issue')"; 
           if(mysqli_query($db, $sql)) { 
            echo "New record created successfully  "; 
   } 
   }
?> 
<html> 
<head> 
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
      <label for="issue">Detail</label> 
      <input required type="text" class="form-control" id="issue" placeholder="issue" name="issue"> 
    </div> 
    <button type="submit" class="btn btn-default">Submit</button> 
  </form> 
</div> 

</body> 
</html>