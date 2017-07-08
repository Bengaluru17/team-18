<?php 
include("setup.php"); 
   session_start(); 
   $name=''; 
   $dob=''; 
   $gen=''; 
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $name = mysqli_real_escape_string($db,$_POST['name']); 
       $dob = mysqli_real_escape_string($db,$_POST['dob']);
       $gender = mysqli_real_escape_string($db,$_POST['gender']);
       $sql = "INSERT INTO staff(lid,name,dob,doj) values('','$name','$dob','')"; 
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
        <h1>Student Details</h1> 
    </div> 
   
      <form action="" method="POST"> 
    <div class="form-group"> 
      <label for="name">Name</label> 
      <input required type="text" class="form-control" id="name" placeholder="Name" name="name"> 
    </div> 
    <div class="form-group"> 
      <label for="dob">DOB</label> 
      <input required type="date" class="form-control" id="dob" placeholder="DOB" name="dob"> 
    </div> 
    <div class="form-group"> 
      <label for="gender">Gender</label> 
      <input required type="text" class="form-control" id="gender" placeholder="Gender" name="gender"> 
    </div> 
    <button type="submit" class="btn btn-default">Submit</button> 
  </form> 
</div> 

</body> 
</html>