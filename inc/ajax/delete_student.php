<?php 
	/**
	 * Db connection
	 */
	require_once "../../app/db.php";
	require_once "../../app/function.php";
	
	$id = $_POST['id'];


	$sql = "SELECT FROM students WHERE id='$id' ";
	$data = $connection -> query($sql);



	
 ?>