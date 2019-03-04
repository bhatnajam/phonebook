<?php
	$name     = $_POST['fullname'];
	$phone    = $_POST['phonenumber'];
	$altphone = $_POST['altphonenumber'];
	$email    = $_POST['emailid'];
	$file     = $_FILES['myfile'];
	$filename = $file['name'];
	/**
	file upload code
	**/
	move_uploaded_file($file['tmp_name'],"uploads/images/".$file['name']);
	$con      = mysqli_connect('localhost','root');
	mysqli_select_db($con,'mydb1');
	$q        =   "INSERT INTO contacts (fullname,phone,alternate_phone,email,profile_picture) values ('$name','$phone','$altphone','$email','$filename')";
	mysqli_query($con,$q);
	mysqli_close($con);
	header("Location:list.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Saved</title>
	<link rel="stylesheet" type="text/css" href="contactsaved.css">
</head>
<body>
	<h1>Thank You! Your Contact has Been Saved.</h1>
	<span>Do you want to save another contact or to view your all contacts then click the below link</span>
	<div class="maindiv">
		<a href="new.php">Add New Contact</a>
		<a href="list.php">Show my Contacts</a>
	</div>
</body>
</html>
