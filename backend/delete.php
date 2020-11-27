<?php
	require 'db.php';

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM users WHERE fname = '$id'";
	
	$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
	header('Location: ../modifydb.php');
}

?>