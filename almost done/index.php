<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Fish Eye State Routing</title>
        <style>
            #text{
                height: 530px;
                width:30%;
                float: left;
                
           border-right: 3px solid black;
            border-bottom: 3px solid black;
            }
            #draw{
                height: 530px;
                width:70%;
            float:left;
          
            }
            canvas {
   
        height: 530px;
                width:69.6%;
                 float:right;
}
        </style>
        
    </head>
    <body>
        <div style="width:100%;height: 60px; border-bottom : 3px solid black; background-color: rgb(255,100,90); margin-top: 0px;">
            <label style="font-size:40px;color:white;font-weight:bolder;font-family: monospace;">
                <center> FISH EYE STATE ROUTING ALGORITHM</center>
            </label>
        </div>
        <div id="text" >
            <form action="" method="post">
            <br />
            <br />
            <br />
            <label style="font-size:25px;font-weight: bolder;">
                <center>Enter no of nodes 
               
                <label style="font-size:20px;font-weight: bolder; color:rgb(20,80,100);">
                    <br />(max 4 nodes allowed)</label>
              <br />     <br /> 
            <br />
             
                  <input type="text" style="font-weight:bold; width:120px;height:30px; " name="node" id="node"> <script>document.getElementById('node').value = "<?php echo $_POST['node'];?>";</script>
                 </center>
            </label>
            <br />
            <br />
              <br />
              <br />
              <input type="reset" style="background-color:rgb(20,80,100) ;border:3px solid black;width:80px;height: 50px; color:white; float:left; margin-left: 20px;  font-weight: bold;" value="Reset"  />
              <input type="submit" style=" background-color: rgb(20,80,100);border:3px solid black;width:80px;height: 50px; color:white; float:right; margin-right: 30px;font-weight: bold;" value="Next"  />
            </form> <br />
            <br />
            <br />
            <br />
            <form action='index1.php' method="POST">
                <center><input value='Next Page' type="button" onclick="call()" style="background-color: rgb(20,80,100);border:3px solid black;width:120px;height: 50px; color:white;  margin-right: 30px;font-weight: bold;" />
                <script>
                    function call(){
                    var a=document.getElementById('node').value;
                     
                     window.location.href ="index1.php?node="+a;
                 } </script></center> 
            </form>
                    
        </div>
        
              <canvas id="canvas" >   </canvas>
              
              <?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
 $node=$_POST['node'];   
 if($node>4 || $node <0||$node=='' )
 {
     echo"<script> alert('Please Enter the nodes between 1 to 4');</script>";
 }
 else
 {if($node==0)
     {
     echo "<script>
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      var imageObj = new Image();
       imageObj.onload = function(){
context.clearRect(0, 0, canvas.width, canvas.height);
     }
      imageObj.src = 'node.png';
    </script>";
      
 }
     if($node ==1)
     {
     echo "<script>
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      var imageObj = new Image();
context.clearRect(0, 0, canvas.width, canvas.height);
       imageObj.onload = function(){
   
      
        context.drawImage(imageObj, 70, 30,30,30);
         
            
          
       
      };
      imageObj.src = 'node.png';
    </script>";
      
 }
 else if($node==2)
 {
     echo "<script>
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      var imageObj = new Image();
context.clearRect(0, 0, canvas.width, canvas.height);
       imageObj.onload = function(){
   
      
        context.drawImage(imageObj, 70, 30,30,30);
         context.drawImage(imageObj, 70, 100,30,30);
           
            
          
       
      };
      imageObj.src = 'node.png';
    </script>"; 
 }
 else if($node==3)
 {
     echo "<script>
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      var imageObj = new Image();
context.clearRect(0, 0, canvas.width, canvas.height);
       imageObj.onload = function(){
   
      
        context.drawImage(imageObj, 70, 30,30,30);
         context.drawImage(imageObj, 70, 100,30,30);
           context.drawImage(imageObj, 170, 30,30,30); 
            
          
       
      };
      imageObj.src = 'node.png';
    </script>"; 
     
 }
 else if($node==4)
 {
    echo "<script>
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      var imageObj = new Image();
context.clearRect(0, 0, canvas.width, canvas.height);
       imageObj.onload = function(){
   
      
        context.drawImage(imageObj, 70, 30,30,30);
         context.drawImage(imageObj, 70, 100,30,30);
            context.drawImage(imageObj, 170, 30,30,30);
             context.drawImage(imageObj, 170, 100,30,30);
            
          
       
      };
      imageObj.src = 'node.png';
    </script>"; 
 }
 } 
    
     
}


?>
     
    </body>
</html>





