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
	
<div class="containertable">
	<table width="100%" border="1" style="border-collapse:collapse;">
		<thead>
			<tr>
				<th><strong>First Name</strong></th>
				<th><strong>Last Name</strong></th>
				<th><strong>Access Level</strong></th>
				<th><strong>Address</strong></th>
				<th><strong>Password</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th> 
			</tr>
		</thead>
		<tbody>

 <?php
	require 'backend/db.php';
		
	$query = "SELECT * FROM users";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($result)){  ?>
			<tr>
				<td align="center"><?php echo $row["fname"]; ?></td>
				<td align="center"><?php echo $row["lname"]; ?></td>
				<td align="center"><?php echo $row["accesslevel"]; ?></td>
				<td align="center"><?php echo $row["address"]; ?></td>
				<td align="center"><?php echo $row["password"]; ?></td>
				<td align="center">
					<a href="updateuser.php?edit=<?php echo $row["fname"]; ?>"><b>Edit</b></a>
				</td>
				<td align="center">
					<a href="backend/delete.php?del=<?php echo $row["fname"]; ?>"><b>Delete</b></a>
				</td>
			</tr>
	<?php } ?>
		</tbody>
		</table>
	</div>
	
</body>
</html>