<?php
	$size = sizeof($_POST);
	$j=1;
	for($i=1;$i<=$size;$i++,$j++){
		$index = "b".$j;
		if(isset($_POST[$index]))
			$c_id[$i]=$_POST[$index];
		else
			$i--;
	}
	$con     =   mysqli_connect ('localhost','root');
	mysqli_select_db ($con,'mydb1');
	for($k=1;$k<=$size;$k++){
		$query   =  "  DELETE FROM contacts WHERE id= $c_id[$k]";
		mysqli_query($con,$query);
	}
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Saved</title>
	<link rel="stylesheet" type="text/css" href="contactsaved.css">
</head>
<body>
	<h1>Thank You! Your Contact(s) has Been Deleted .</h1>
	<span>Do you want to save another contact or to view your all contacts or you want to delete another contact(s) then click the below link</span>
	<div class="maindiv">
		<a href="new.php">Add New Contact</a>
		<a href="list.php">Show my Contacts</a>
		<a href="deletecontact.php">Delete Contacts</a>
		<a href="editcontact.php">Edit Conatact</a>
		<a href="searchForm.php">Search Conatact</a> 
	</div>
</body>
</html>