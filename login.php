<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","loginpage");

	if (mysqli_connect_errno($con)) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
 	if (!$con) {
 		die("database not connected");
 	}else{
 		$sql="select * from login where username = '$username' and password = '$password'";
 		$result=mysqli_query($con,$sql);
 		// $row=mysqli_fetch_array($result);
 		if (mysqli_num_rows($result)>0) {
 			echo '<div style="font-size:5em;color:red;">LOGIN SUCCESSFUL</div>';

 			// header('Location:home_page.html');
 		}
 		else {
 			echo "LOGIN FAILED";
 			// header('Location:login.html');
 		}
 	}

?>

</body>
</html>

