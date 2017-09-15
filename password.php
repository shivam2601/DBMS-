<?php  
session_start();
$db=mysqli_connect("localhost","root","","registration")
or
die("not connected");

if (isset($_POST['sb_btn'])) {
	$pass1=$_POST['passch'];
	$pass2=$_POST['passch2'];
	if ($pass1==$pass2) {
		$pass1=md5($pass1);
		$query="UPDATE info SET password='".$pass1."' WHERE email= '".$_SESSION['email']."'";
		$result=mysqli_query($db,$query);
		if(!$result){
			echo "not connected";
		}
		else{
			$_SESSION['message1']="Password successfully changed";
			header("Location:profile.php");
		}
	}
	else{
		echo "Two password do not match";
	}
}





 ?>




<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
</head>
<body>
<form name="chpass" id="chpass" action="password.php" method="post">
	New Password:<input type="password" name="passch" id="passch" placeholder="Enter New Password">
	Confirm Password:<input type="password" name="passch2" id="passch2" placeholder="Confirm Password">
	<input type="submit" name="sb_btn" id="sb_btn" value="Change Password">
</form>
</body>
</html>