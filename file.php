<?php
include("setup.php");
   session_start();
   if(isset($_POST['submit'])) {
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg"); // used to store the filename in a variable

    //storind the data in your database
    $query= "INSERT INTO items VALUES ('$id','$title','$description','$price','$value','$contact','$image')";
    mysql_query($query);

    require('heading.php');
    echo "Your add has been submited, you will be redirected to your account page in 3 seconds....";
    header( "Refresh:3; url=account.php", true, 303);
   }
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         mysqli_query($db,"insert into images values(1,". basename( $_FILES["fileToUpload"]["name"])."");
          
}
}*/
?>
<html>
<style>
		.btn {
				border: none; /* Remove borders */
				color: white; /* Add a text color */
				padding: 14px 28px; /* Add some padding */
				cursor: pointer; /* Add a pointer cursor on mouse-over */
			}
		.success {background-color: #4CAF50;} /* Green */
		.success:hover {background-color: #46a049;}
		
		.fileContainer [type=file] {
				cursor: inherit;
				display: block;
				font-size: 999px;
				filter: alpha(opacity=0);
				min-height: 100%;
				min-width: 100%;
				opacity: 0;
				position: absolute;
				right: 0;
				text-align: right;
				top: 0;
			}
</style>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input class="btn" type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>