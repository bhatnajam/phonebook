<?php  

  $search = $_GET['search'];
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db ($con,'mydb1');

  $query = "SELECT * FROM contacts WHERE `fullname` like '%$search%'";
  $result = mysqli_query($con,$query);
  $num    = mysqli_num_rows($result);
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
    </ul>
    <h1>Your Saved Contacts.</h1>
    <table>
      <tr>
          <th>SNO.</th>
          <th>Name</th>
          <th>Phone Number</th>
          <th>Alternate Phone Number</th>
          <th>Email ID</th>
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
        </tr>
        <?php 
          }
        ?>
    </table>
  </body>
  </html>