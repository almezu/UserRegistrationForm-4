<?php
require 'db.php';

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE fname=$id");
	while($row = mysqli_fetch_assoc($result); {

?>
