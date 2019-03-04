<!DOCTYPE html>
<html>
<head>
	<title>Search Contact</title>
	<link rel="stylesheet" type="text/css" href="search.css">
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
		<h1>Search Your Contacts</h1>
	<div class="outerdiv">
		<div class="container">
			<form class="sform" action="search.php" method="get">
				<input class="sinput" type="text" name="search" placeholder="Search">
				<input class="ssubmit" type="submit" value="Search">
			</form>
		</div>
    </div>
</body>
</html>