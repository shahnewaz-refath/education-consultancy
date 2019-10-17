<?php
	require_once('../database.php');
	$id = $_POST['x'];
	$getimg = "SELECT picture FROM employee WHERE id_pk = '$id'";
	$gres = mysqli_query($database->connection,$getimg);
	$grow = mysqli_fetch_array($gres);
	$image = 'images/employee/'.$grow['picture'];

	$del = "DELETE FROM employee WHERE id_pk = '$id'";
	$res = mysqli_query($database->connection,$del);
	if($res){
		unlink($image);
		echo "Data successfully deleted";
	}else{
		echo "Data not deleted";
	}
?>