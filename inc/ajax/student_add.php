<?php 

	/**
	 * Db connection
	 */
	require_once "../../app/db.php";
	require_once "../../app/function.php";


	//get value
	$name  = $_POST['name'];
	$email  = $_POST['email'];
	$address  = $_POST['address'];
	$cell  = $_POST['cell'];

	$data = fileUpload($_FILES['photo'], '../../media/students/');
	$file_name = $data['file_name'];


	$sql = "INSERT INTO students (name, email, address, phone, photo) VALUES ('$name', '$email', '$address', '$cell', '$file_name')";
	$connection -> query($sql);


	echo "<p class='alert alert-success'>Data Added Successful! <button class='close' data-dismiss='alert'>&times;</button></p>";


 ?>