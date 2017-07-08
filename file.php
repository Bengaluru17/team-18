<!DOCTYPE html>
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

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input class="btn" type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>