<?php 
include("setup.php"); 
   session_start(); 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $name = mysqli_real_escape_string($db,$_POST['name']); 
       $dob = mysqli_real_escape_string($db,$_POST['dob']);
       $gender = mysqli_real_escape_string($db,$_POST['gender']);
       $class = mysqli_real_escape_string($db,$_POST['class']);
       $school = mysqli_real_escape_string($db,$_POST['school']);
       $aadhar = mysqli_real_escape_string($db,$_POST['aadhar']);
       $hobbie= mysqli_real_escape_string($db,$_POST['hobbie']);

       $sql = "INSERT INTO student (sid,name,dob,class,school,aadhar,gender,hobbies) values('','$name','$dob','$class','$school','$aadhar','$gender','$hobbie')"; 
           if(mysqli_query($db, $sql)) { 
            echo "New record created successfully  "; 
            echo '<script> 

  
       
       window.location.href = "sdisplay.php?name='.$name.'";
       
              
   </script>';
   } 
   } 
?> 
<html> 
<head> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head> 

<div style="height:20% width:100%">
    <a href="staff.php"><h4>Home</h4></a>
</div>
<body style="background-image: url('back1.png');background-repeat: no-repeat; background-size:cover;"> 




     
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
     <div class="form-group"> 
      <label for="class">Class</label> 
      <input required type="number" class="form-control" id="class" placeholder="Class" name="class"> 
    </div>  
     <div class="form-group"> 
      <label for="school">School</label> 
      <input required type="text" class="form-control" id="school" placeholder="School" name="school"> 
    </div> 
     <div class="form-group"> 
      <label for="aadhar">AadharNo</label> 
      <input required type="number" class="form-control" id="aadhar" placeholder="Aadhar" name="aadhar"> 
    </div> 
     <div class="form-group"> 
      <label for="hobbie">Hobbies</label> 
      <input required type="text" class="form-control" id="hobbie" placeholder="Hobbie" name="hobbie"> 
    </div> 
    <button type="submit" class="btn btn-default">Submit</button> 
  </form> 
</div> 

</body> 
</html>
