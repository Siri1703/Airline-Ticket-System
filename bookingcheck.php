<?php 
include "db_conn.php";
if(isset($_POST['save']))
{
		$dates=$_POST['dates'];
		$origin=$_POST['origin'];
		$destination=$_POST['destination'];
		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$uniqueid=$_POST['uniqueid'];
		$phonenumber=$_POST['phonenumber'];

	


           $sql2 = "INSERT INTO booking(dates, origin,destination,fullname, email,uniqueid,phonenumber) VALUES('$dates', '$origin', '$destination','$fullname','$email','$uniqueid','$phonenumber')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: logout.php");
           	 
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }

	
	header("Location: logout.php");
	exit();
}
