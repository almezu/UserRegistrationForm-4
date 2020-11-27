<?php
	require 'backend/db.php';
	
	$id=$_GET['edit'];
	$sql = "SELECT * FROM users WHERE fname='$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, intial-scale=1">
<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<title>Edit</title>
</head>
<body>
	<div class="crudnav">
		<?php include 'menu.php';?>
	</div>

		<div class= "boxheader">
			<h1>EDIT FORM USER</h1>
			<p>This form will update the specific data in the database based on your selected data.</p>
		</div>
		
<div class="container">

	<form action="" method="post">

		<div class="row">
			<div class="col-25">
				<label for="fname"> First Name </label>
			</div>
			<div class="col-75">
				<input type="text" id="fname" name="firstname" value="<?php echo $row['fname'];?>">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"> Last Name </label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" name="lastname" value="<?php echo $row['lname'];?>">
			</div>	
		</div>
		<div class="row">
			<div class="col-25">
				<label for="accesslvl"> Access Level </label>
			</div>
			<div class="col-75">
				<select id="accesslevel" name="accesslevel">
					<option value="ordinaryuser">Ordinary User</option>
					<option value="superisoryuser">Supervisory User</option>
					<option value="superuser">Super User</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="address"> Address </label>
			</div>
			<div class="col-75">
				<textarea id="address" name="address" value= "<?php echo $row['address'];?>" style="height:70px"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="password"> Password </label>
			</div>
			<div class="col-75">
				<input type="text" id="password" name="password" value= "<?php echo $row['password'];?>">
			</div>
		</div>
		<div class="row">
			<input type="submit" value="Update" name="update">
		</div>
	</form>
	
<?php
	if (isset($_POST['update'])) {
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$accesslevel=$_POST['accesslevel'];
	$address=$_POST['address'];
	$password=$_POST['password'];
	
	$update = "UPDATE users SET fname='$fname', lname='$lname', accesslevel='$accesslevel', address='$address', password='$password' WHERE fname='$id'";
	$result2 = mysqli_query($conn,$update) or die (mysqli_error($conn));
	header('Location: modifydb.php');
	}
?>
</div>

</body>
</html>
