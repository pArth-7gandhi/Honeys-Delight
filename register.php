<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
if ($password != $repassword) {

	header('location: register.html');
}
else {
 	$con=mysqli_connect("localhost","root","","loginpage");
 	if (!$con) 
 	{
 		die("database not connected");
 	}
 	else
 	{
 		$sql="insert into login values ('".$username."','".$email."','".$password."','".$repassword."')";
 		$Insert=mysqli_query($con,$sql);
 		if (!$Insert) 
 		{
 			die("not inserted");
 		}
 		else
 		{
 			echo '<div style="font-size:5em;color:red;">DATA successfully added in database</div>';
 			// header('location:home_page.html');
 		}
 	}
 }