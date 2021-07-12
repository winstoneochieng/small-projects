<html>
<head>
	<title>Add Students</title>
</head>

<body>
	<a href="index.php">Go to Homepage</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
            </tr>
            <tr>
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Mobile No</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into students table.
	if(isset($_POST['Submit'])) {
		$fullname = $_POST['fullname'];
        $id = $_POST['id'];
        $email = $_POST['email'];
		$mobile = $_POST['phone no'];

		// include database connection file
		include_once("config.php");

		// Insert student data into table
		$result = mysqli_query($mysqli, "INSERT INTO students(name,id,email,mobile) VALUES('$name','$id','$email','$mobile')");

		// Show message when a student is added
		echo "Student added successfully. <a href='index.php'>View Students</a>";
	}
	?>
</body>
</html>