<?php 
	$first = $_POST['firstName'];
	$last = $_POST['lastName'];
	$tel = $_POST['tel'];

	$valid = filter_var($first, FILTER_VALIDATE_EMAIL);
	if(!$valid){
		// header('location: ../views/layout.php');
		// header('HTTP/1.0 404 Not Found');
		// include('../index.php');
		exit();
	}



	if(isset($_FILES["myfile"])){
	if($_FILES["myfile"]["error"] > 0){
	    echo "Error: " . $_FILES["myfile"]["error"] . "<br />";
	}
	else{
		echo "Upload: " . $_FILES["myfile"]["name"] . "<br />";
		echo "Type: " . $_FILES["myfile"]["type"] . "<br />";
		echo "Size: " . ($_FILES["myfile"]["size"] / 1024) . " Kb<br />";
		echo "Temp Store: " . $_FILES["myfile"]["tmp_name"] . "<br />";

		if (file_exists("upload/" . $_FILES["myfile"]["name"])){
		  echo $_FILES["myfile"]["name"] . " already exists. ";
		}
		else{
		   move_uploaded_file($_FILES["myfile"]["tmp_name"],"../upload/" . 
           $_FILES["myfile"]["name"]);
           echo "Stored in: " . "upload/" . $_FILES["myfile"]["name"];
		}	
	}
}



 ?>