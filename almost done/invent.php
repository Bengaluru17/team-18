<?php 
include("setup.php"); 
   session_start();  
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
       $name = mysqli_real_escape_string($db,$_POST['name']);
       $quantity = mysqli_real_escape_string($db,$_POST['quantity']);
       $section = mysqli_real_escape_string($db,$_POST['section']);
      

       $sql = "INSERT INTO inventory(iid,name,quantity,section) values('','$name','$quantity','$section')"; 
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
     
<div class="container"style="background-color:rgb(238,238,238); height:100%; width:100%;"> 

    <div class="jumbotron" style="background-color: #506650;"> 
        <h2 style="color: white">Add Inventory Details</h2> 
    </div> 
   
      <form action="" method="POST"> 
    <div class="form-group" > 
      
    </div> 
    <div class="form-group"> 
      <label for="name">Name</label> 
      <input required type="text" class="form-control" id="name" placeholder="name" name="name"> 
    </div> 
    <div class="form-group"> 
      <label for="quantity">Quantity</label> 
      <input required type="number" class="form-control" id="quantity" placeholder="quantity" name="quantity"> 
    </div>
     <div class="form-group"> 
      <label for="section">Section</label> 
      <input required type="text" class="form-control" id="section" placeholder="section" name="section"> 
    </div>  
    
    <button type="submit" class="btn btn-default">Submit</button> 
  </form> 
</div> 

</body> 
</html>