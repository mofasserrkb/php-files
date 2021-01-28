<?php

//if(isset($_FILES['image']))
if(isset($_POST['save']))
{
	/*
	echo "<pre>";
	print_r($_FILES); //print_r($_FILES['image']); here 'image' is a file name
	echo "</pre>";
    */
    
 $file_name=$_FILES['image']['name'];
 $file_type=$_FILES['image']['type'];
 $file_tmp=$_FILES['image']['tmp_name'];
 $file_error=$_FILES['image']['error'];
 $file_size=$_FILES['image']['size'];
 if(move_uploaded_file($file_tmp,'uploaded image/'.$file_name))
 {
     echo "Uploaded file successfully <br>";
 }
 else
 {
 	echo "Could not upload file <br>";
 }

}
 
?>



<!DOCTYPE html>
<html>
<head>
	<title>$_FILE and move_uploaded_file function</title>
</head>
<body>
      <form action="" method="post" enctype="multipart/form-data">
      	<input type="file" name="image"><br><br>
      	<input type="submit" name="save"> 
      </form>
</body>
</html>