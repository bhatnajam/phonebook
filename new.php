<!DOCTYPE html>
<html>
<head>
	<title>New Contact</title>
	<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="list.php">Show Contacts</a></li>
		<li><a href="new.php">Add New Contact</a></li>
		<li><a href="deletecontact.php">Delete Contact</a></li>
		<li><a href="editcontact.php">Edit Conatact</a></li>

	</ul>
	<h1>ADD NEW CONTACT</h1>
	<div class="outerdiv">
		<form action ="contactsaved.php" method="post" onsubmit="return validation()">
			<div class="outerinputdiv">
				<div class="inputdiv">
					<input class="inputs" type="text" name="fullname" placeholder="FullName" >
				</div>
				<div class="inputdiv">
					<input  class="inputs" type="text" name="phonenumber" placeholder="PhoneNumber" >
				</div>
				<div class="inputdiv">
					<input  class="inputs" type="text" name="altphonenumber" placeholder="AlternatePhoneNumber" >
				</div>
				<div class="inputdiv">
					<input class="inputs" type="email" name="emailid" placeholder="Email" >
				</div>
				<div id="error_messages" class="inputdiv"></div>
				<div class="inputdiv">
					<input  class="inputs" id="sub" type="submit" value="SAVE">
				</div>
			</div>
			
		</form>
	</div>
	<script type="text/javascript" src="new.js"></script>	
</body>
</html>