<html>

<head>
	<title>Add Users</title>
</head>
<center>
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
	</center>
<center>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td bgcolor="red">Name</td>
				<td><input type="text" name="name"autocomplete="off" required></td>
			</tr>
			<tr> 
				<td>mobile</td>
				<td><input type="text" name="mobile"autocomplete="off" required></td>
			</tr>
			<tr> 
				<td>email</td>
				<td><input type="text" name="email"autocomplete="off" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	</center>
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO user(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	 
	}
	?>
</body>
</html>
