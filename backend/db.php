<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpwrd='';
	$dbname='regdb';
	$conn= mysqli_connect($dbhost, $dbuser, $dbpwrd, $dbname) or die('MySql Connection Failed...'.mysqli_error());
	if(!$conn){
		die("Connection Failed: ".mysqli_error());
	}
?>
