<!DOCTYPE HTML>
<html lang="en">
   
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 465px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      /*.row.content {height:100%;} */
    }
  </style>
<script type="text/javascript">
function doSomething() {
    $.get("get_inv.php");
    return false;
}
</script>
</head>
<body style="background-image:url('bg_1.jpg');background-repeat:no-repeat;background-size:cover">

<nav class="navbar navbar-inverse" style="background-color:#506650">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://www.reachinghand.org" style="font-size:125%">Home</a></li>
        <li><a href="http://reachinghand.org/contacts/" style="color:#ffffff;font-size:125%">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php" style="font-size:125%"><span class="glyphicon glyphicon-log-in"><?php
        
?>
</span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container" >
<br />
<br />
        <center><img src="ReachingHand.jpg" style="height:50%;width:75%;"></img></center>
<br />
<br />
<br />

</div>
<div class="container-fluid text-center" style="height:100%;">  
	<div class="container-fluid" style="background-color:#506650;border-radius:5px"> 
      	<h1 class="margin" style="color:#f5f5f5;font-size:500%;">Welcome</h1>
      	<p style="color:#eeeeee;font-size:250%;">Welcome to Reaching Hands! What would you like to do?</p>
    <div class="row content" style="text-align:center;margin-top:50px">
	<div class="col-lg-4 ">
	<br />
<br />
	<button type="button" class="btn btn-primary" style="font-size:250%">
	    <a href="inventory.php?" target="content" style="color:#eeeeee">Inventory</a>
	</button>
    	</div>
        <div class="col-lg-4">
	<br />
<br />
	<button type="button" class="btn btn-primary" style="font-size:250%">
	    <a href="get_inv.php?" target="content" style="color:#eeeeee">Student Records</a>
	</button>
    	</div>
	<div class="col-lg-4" >
	<br />
<br />
	<button type="button" class="btn btn-primary" style="font-size:250%">
	    <a href="get_inv.php?" target="content" style="color:#eeeeee">Staff Records</a>
	</button>
    	</div>
    </div>
</div>
<footer class="container-fluid text-center" style="border-radius:5px">
  <p>Copyright cfg 2017</p>
</footer>
</body>
</html>
