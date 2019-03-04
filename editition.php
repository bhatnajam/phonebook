<?php
	$size = sizeof($_POST);
	$records = $size/5;
	for($i=1;$i<=$records;$i++){
		$index1="id".$i;
		$id[$i]=$_POST[$index1];
		$index2="fullname".$i;
		$fullname[$i]=$_POST[$index2];
		$index3="phone".$i;
		$phone[$i]=$_POST[$index3];
		$index4="alternate_phone".$i;
		$alternate_phone[$i]=$_POST[$index4];
		$index5="email".$i;
		$email[$i]=$_POST[$index5];
	}
	$con      = mysqli_connect('localhost','root');
	mysqli_select_db($con,'mydb1');
	for($i=1;$i<=$records;$i++){
	$query = "UPDATE contacts SET fullname='$fullname[$i]',phone='$phone[$i]',alternate_phone='$alternate_phone[$i]',email='$email[$i]' WHERE id=$id[$i]"; 
	mysqli_query($con,$query);
	}
	mysqli_close($con)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Saved</title>
	<link rel="stylesheet" type="text/css" href="contactsaved.css">
</head>
<body>
	<h1>Thank You! Your Contact(s) has Been Edited .</h1>
	<span>Do you want to save another contact or to view your all contacts or you want to delete or edit another contact(s) then click the below link</span>
	<div class="maindiv">
		<a href="new.php">Add New Contact</a>
		<a href="list.php">Show my Contacts</a>
		<a href="deletecontact.php">Delete Contacts</a>
		<a href="editcontact.php">EditContacts</a>
		<a href="searchForm.php">Search Conatact</a> 

	</div>
</body>
</html>