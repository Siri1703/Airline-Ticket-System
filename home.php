<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Your booking ticket!!!</h3>
     <img src="airplanes.jpeg" height=500 width=1100>
     <center>
     	<form action="bookingcheck.php" method="POST">
     	Select date:<input type="date" name="dates"/>
          Enter origin:<input type="text" name="origin"/>
          Enter destination:<input type="text" name="destination"/>
     	Enter your FullName:<input type="text" name="fullname"/>
     	
     	Enter your emailid:<input type="email" name="email"/>
     	Enter your uniqueid:<input type="text" name="uniqueid"/>
     	Enter your phonenumber<input type="text" name="phonenumber"/>
     	<input type="submit" name="save" value="submit">
     	</form>

     
 
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>