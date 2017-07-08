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
body{
 
}
.textbox {
  padding: 10px;
  border: none;
  border-bottom: solid 2px #c9c9c9;
  transition: border 0.3s;
  
}

.textbox input[type="text"]:focus,
.textbox input[type="text"].focus {
  border-bottom: solid 2px #969696;
}

table {
    border-collapse: collapse;
    width: 50%;
    /*font-family: 'BauhausHarishwk-Medium', Arial, Helvetica, sans-serif;*/
}

th, td {
    padding: 8px;
    text-align: center;
    color:#00264d;
   border: 1px solid #ddf;
}
        </style>
    </head>
    <body>
        <div style="width:100%;height: 60px; border-bottom : 3px solid black; background-color: rgb(255,100,90); margin-top: 0px;">
            <label style="font-size:40px;color:white;font-weight:bolder;font-family: monospace;">
                <center> FISH EYE STATE ROUTING ALGORITHM</center>
            </label>
        </div>
        <div >
            <br />
            <label style='color:rgb(20,40,100); font-size: 25px; margin-left: 340px;  '>
                Please enter the distance for 
                </label>
            <br /><br />




<!--<form action="" method="post">
<input type="text" class=\"textbox\" value="" name="nodes" />
<input type="submit" value="submit" />
</form>-->

<?php
    //$n=$_POST["nodes"];//take this from the first page
   
$node = $_GET['node'];

   // $n=3;//temporary value
    $n=$node;
    echo "<form action=\"\" method=\"post\" >";
    for($i=0;$i<$n;$i++)
    
    {   if(($i+1)%2==0){ 
        echo "<div style='width:50%; float:right;'> ";
    echo "<label style='color:rgb(150,90,80); font-size: 20px; '> Node ".($i)."</label></br><br />";}
        else
        {echo "<div style='width:50%; float:left;'> ";
               echo "<label style='color:rgb(150,90,80); font-size: 20px; float:left'> Node ".($i)."</label></br><br />";  
        }
        for($j=0;$j<$n;$j++)
        {
            if(($i+1)%2==0){
                  echo "<label style='color:rgb(50,90,80); font-size: 20px;'>Node ".($i)."-->Node ".($j)."</label>";
            echo "<input type=\"text\" class=\"textbox\" size=1 value=\"\" name=\"".$i.$j."\"  style='margin-left:20px;'/> <br />";
            }else{
            echo "<label style='color:rgb(50,90,80); font-size: 20px; margin-right: 20px; float:left;'>Node ".($i)."-->Node ".($j)."</label>";
            echo "<input type=\"text\" class=\"textbox\" size=1 value=\"\" name=\"".$i.$j."\" style='margin-left:20px;'/> <br />";}
        }
        echo "<br /><br /><br /><br /><br /></div>";
    }
/*    echo  " <center><input value='Next' type='button' onclick='call()' style='margin-left:400px;background-color: rgb(20,80,100);border:3px solid black;width:120px;height: 50px; color:white;  margin-right: 30px;font-weight: bold;' />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <script>
                    function call(){
                    document.getElementById('src').style.visibility='visible';
                    
                     
                    
                 } </script></center> ";*/
    echo "<div id='src11' style='visibility:visible; margin-left:200px; ' ><br /><label style=' font-size: 20px;'>Enter the source node no<input type=\"text\" class=\"textbox\" name=\"src\" style='margin-left:30px;'/></label> <br /><br />
       <label style=' font-size: 20px;'> Enter the destination node no<input type=\"text\" class=\"textbox\" name=\"dest\"  style='margin-left:30px;' /></label><br /><br />
       <br />";
    
    echo "<input type=\"submit\" value=\"submit\" style='margin-left:250px;background-color: rgb(20,80,100);border:3px solid black;width:120px;height: 50px; color:white;  margin-right: 30px;font-weight: bold;' ></form></div>";
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        //echo "here";
        //echo "<form action=\"fsr1.php\" method=\"post\">";
        $orig=$pmat=$dmat=array_fill(0.0, array_fill(0.0, $n, 0.0), 0.0);
        $src=$_POST["src"];
        $dest=$_POST["dest"];
        
        for($i=0;$i<$n;$i++)
        {
            for($j=0;$j<$n;$j++)
            {
                //echo $i.$j;
                $dmat[$i][$j]=$_POST[$i.$j];
                $orig[$i][$j]=$dmat[$i][$j];
                if($dmat[$i][$j]==999)
                    $pmat[$i][$j]=-1;
                else
                    $pmat[$i][$j]=$j;
            }
            $dmat[$i][$i]=0;
            $pmat[$i][$i]=$i;
            
        }
       
        
        for($k=0;$k<$n;$k++)
            for($i=0;$i<$n;$i++)
                for($j=0;$j<$n;$j++)
                    if($dmat[$i][$j]>$dmat[$i][$k]+$dmat[$k][$j])
                    {
                        $pmat[$i][$j]=$k;
                        $dmat[$i][$j]=$dmat[$i][$k]+$dmat[$k][$j];
                    }    
        for($i=0;$i<$n;$i++)
        {
            echo "<br /><br /><br /><p style='color:rgb(20,40,100); margin-left:300px; font-size:25px;'>Routing table for node :$i</p>";
            //printf("\nNext hop distance:\n");
            echo "<table style='margin-left:150px; border-left:5px;' border='border' >
                <tr>
                    <th>Destination</th>
                    <th>Via</th>
                    <th>Distance</th>
                </tr>";
            for($j=0;$j<$n;$j++)
            {
                if($i!=$j)
                {
                    echo "<tr>
                    <td>$j</td>
                    <td>".$pmat[$i][$j]."</td>
                    <td>".$dmat[$i][$j]."</td>
                    </tr>";
                }
            }
            //echo "<br><br>";
            echo "</table><br /><br /><br />";
        }
        echo "<label style='font-weight:bolder;font-size:20px;'> Path taken from source node to destination node       :</label> ";
        find($src, $dest, $pmat);
        echo "<label style='font-weight:bolder;font-size:20px;'>".$dest."</label>";
        echo "<br /><br /><label style='font-weight:bolder;font-size:20px;'>The distance between the two nodes is ".$dmat[$src][$dest]."</label>";
        echo "<br /><br /><br /> <center><label style='font-weight:bolder;font-size:20px; color:rgb(20,40,100);'>Neighbour List</label></center><br /><br />";
        //echo "<br>Neighbour list:<br>";
        for($i=0;$i<$n;$i++)
        {
            echo "<br><label style='font-weight:bolder;font-size:20px; color:rgb(20,40,160); margin-left:200px;'>Neighbours of $i are:</label><br>";
            neighbour($i, $orig, $n);
        }
                
    }
    //echo $mat;
    
    function find($x, $y, $mat)
    {
        echo "<label style='font-weight:bolder;font-size:20px;'>".$x."=>";
        //echo "x=$x, y=$y, mat=$mat[$x][$y]";
        if($y!=$mat[$x][$y])
            find($mat[$x][$y], $y, $mat);
        echo "</label>";
    }
   
    function neighbour($x, $path, $num)
    {
        
        for($i=0;$i<$num;$i++)
        {    
            if($x!=$i)
            {
                if($path[$x][$i]!=999 && $path[$i][$x]!=999)
                {  echo "<div style='margin-left:200px; font-size:20px; font-weight:bold;'>";
                    echo "<br /><br />  <img src='node.png' style='width:50px; height:50px;' /> <br />Node" .$i."<br>";//level 1
                    //neighbour($i, $path, $num);
                
                    //neighbour list of $i
                    $y=$i;
                    for($j=0;$j<$num;$j++)
                    {
                        if($y!=$j)
                        {
                            if($path[$y][$j]!=999 && $path[$j][$y]!=999)
                            {
                                echo "|<br>|___<br />  <img src='node.png' style='width:50px; height:50px;' /><br />Node".$j."<br>";//level 2
                            }
                        }
                 }  
                   echo "</div>";}
            }
        }
    }    
    
        
?>
</div>

</body>
</html>