<?php 

	/**
	 * Db connection
	 */
	require_once "../../app/db.php";
	require_once "../../app/function.php";


	$id = $_POST['id'];

	$sql = "SELECT * FROM students WHERE id='$id'";
	$data = $connection -> query($sql);


	$single_data_s = $data -> fetch_assoc();

	echo json_encode($single_data_s);

