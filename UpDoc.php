<?php
include('Documents.php');
	if (($_FILES['my_file']['name']!="")){
	// Where the file is going to be stored
		$target_dir = "Documents/";
		$file = $_FILES['my_file']['name'];
		$path = pathinfo($file);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['my_file']['tmp_name'];
		$path_filename_ext = $target_dir.$filename.".".$ext;
	 
	// Check if file already exists
	if (file_exists($path_filename_ext)) {
		header("location:Documents.php?message=File already exists");
		//echo "Sorry, file already exists.";
	}else{
		move_uploaded_file($temp_name,$path_filename_ext);
		header("location:Documents.php?message=File Uploaded Successfully");
		
	 }
	}
?>