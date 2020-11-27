<?php

if (isset($_POST['save'])) {
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$accesslevel=$_POST['accesslevel'];
	$address=$_POST['address'];
	$password=$_POST['password'];
	$button=$_POST['save'];
	}
	require 'db.php';
			
	$sql="INSERT INTO users(lname, fname, accesslevel, address, password) 
	VALUES('$lname', '$fname', '$accesslevel', '$address', '$password')";
	mysqli_query($conn, $sql);
	header('Location: ../viewuser.php');			
?>
