<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, intial-scale=1">
<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="crudnav">
		<?php include 'menu.php';?>
	</div>
	
		<div class= "boxheader">
			<h1>REGISTRATION FORM-ADD USER</h1>
			<p>Use this form to register a new user in the system.</p>
		</div>

<div class="container">
	<form action="backend/sqlinsert.php" method="post">
		<div class="row">
			<div class="col-25">
				<label for="fname"> First Name </label>
			</div>
			<div class="col-75">
				<input type="text" id="fname" name="firstname" placeholder="Your name...">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"> Last Name </label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" name="lastname" placeholder="Your last name...">
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
				<textarea id="address" name="address" placeholder="Your address..." style="height:70px"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="password"> Password </label>
			</div>
			<div class="col-75">
				<input type="text" id="password" name="password" placeholder="Your password..">
			</div>
		</div>
		<div class="row">
			<input type="submit" value="Save!" name="save">
		</div>
	</form>
</div>

</body>
</html>