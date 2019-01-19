<?php
	$con     =   mysqli_connect ('localhost','root');
	mysqli_select_db ($con,'mydb1');
	$query   =  "  SELECT * FROM contacts  ";
	$result  =   mysqli_query($con,$query);
	$num     =   mysqli_num_rows($result);

	mysqli_close($con);
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Delete Contact</title>
		<link rel="stylesheet" type="text/css" href="list.css">
	</head>
	<body>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="new.php">Add New Contact</a></li>
			<li><a href="deletecontact.php">Delete Contacts</a></li>
			<li><a href="editcontact.php">Edit Conatact</a></li>
		</ul>
		<h1>Your Saved Contacts.</h1>
		<form action="deletion.php" method="post">
			<table>
				<tr>
					<th>SNO.</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Alternate Phone Number</th>
					<th>Email ID</th>
					<th>Select To Delete</th>
				</tr>
					<?php
						for($i=1;$i<=$num;$i++){
							$row=mysqli_fetch_array($result);
					?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['fullname'];?></td>
						<td><?php echo $row['phone'];?></td>
						<td><?php echo $row['alternate_phone'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><input type="checkbox" value="<?php echo $row['id'];?>" name="b<?php echo $i?>"></td>
					</tr>
					<?php	
						}
					?>
			</table>
			<input id="del" type="submit" value="DELETE">
	 </form>
	</body>
	</html>
	