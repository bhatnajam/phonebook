
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
		<title>Your Contacts</title>
		<link rel="stylesheet" type="text/css" href="list.css">
	</head>
	<body>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="new.php">Add New Contact</a></li>
			<li><a href="deletecontact.php">Delete Contact</a></li>
			<li><a href="editcontact.php">Edit Conatact</a></li>
			<li><a href="searchForm.php">Search Conatact</a></li>
			<li><a href="list.php">Show my Contacts</a></li>
		</ul>
		<h1>Your Saved Contacts.</h1>
		<table>
			<tr>
					<th>SNO.</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Alternate Phone Number</th>
					<th>Email ID</th>
					<th>Image</th>
			</tr>
				<?php
					static $count=1;
					for($i=1;$i<=$num;$i++){
						$row=mysqli_fetch_array($result);
				?>
				<tr>
					<td><?php echo $count;?></td>
					<td><?php echo $row['fullname'];?></td>
					<td><?php echo $row['phone'];?></td>
					<td><?php echo $row['alternate_phone'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><img src="uploads/images/<?php echo $row['profile_picture'];?>" width="100px" height="100px"></td>

				</tr>
				<?php
					$count++;
					}
				?>
		</table>
	</body>
	</html>
	
	
