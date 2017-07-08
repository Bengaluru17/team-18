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
<?php 
include("setup.php"); 
   session_start();  
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $iid = mysqli_real_escape_string($db,$_POST['iid']); 
       $name = mysqli_real_escape_string($db,$_POST['name']);
       $quantity = mysqli_real_escape_string($db,$_POST['quantity']);
       $section = mysqli_real_escape_string($db,$_POST['section']);
      

       $sql = "INSERT INTO inventory(iid,name,quantity,section) values('$iid','$name','$quantity','$section')"; 
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
        <h1>Inventory</h1> 
    </div> 
   
      <form action="" method="POST"> 
    <div class="form-group"> 
      <label for="iid">IId</label> 
      <input required type="number" class="form-control" id="iid" placeholder="IId" name="iid"> 
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
