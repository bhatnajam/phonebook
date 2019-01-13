<!DOCTYPE html>
	<html>
	<head>
		<title>Your Contacts</title>
		<link rel="stylesheet" type="text/css" href="list.css">
	</head>
	<body>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="new.php">Add New Contact</a></li>
		</ul>
		<h1>Your Saved Contacts.</h1>
	</body>
	</html>
<?php
	$con     =   mysqli_connect ('localhost','root');
	mysqli_select_db ($con,'mydb1');
	$query   =  "  SELECT * FROM contacts  ";
	$result  =   mysqli_query($con,$query);
	echo "<div><table>";
	echo "<tr><th>Name</th><th>Phone</th><th>Alternate Phone</th><th>Email</th></tr>";
	while($row  =   mysqli_fetch_array($result)){
		echo "<tr><td>" . $row['fullname'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['alternate_phone'] . "</td><td>" . $row['email'] . "</td></tr></div>";
	}
	echo "</table>";  
	mysqli_close($con);
?>
	
	
