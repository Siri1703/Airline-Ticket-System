<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Booking Details</h2>

<table border="2">
  <tr>
    <td>dates</td>
    <td>origin</td>
    <td>destination</td>
    <td>fullname</td>
    <td>email</td>
    <td>phonenumber</td>
  </tr>

<?php

include "db_conn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from booking"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['dates']; ?></td>
    <td><?php echo $data['origin']; ?></td>
    <td><?php echo $data['source']; ?></td>
    <td><?php echo $data['destination']; ?></td>
    <td><?php echo $data['fullname']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['phonenumber']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>