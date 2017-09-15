<?php  
session_start();
$db=mysqli_connect("localhost","root","","registration")
or
die("not connected");

if (isset($_POST['sb_btn'])) {
	$mob=$_POST['mobch'];
		$query="UPDATE info SET wnumber='".$mob."' WHERE email= '".$_SESSION['email']."'";
		$result=mysqli_query($db,$query);
		if(!$result){
			echo "not connected";
		}
		else{
			$_SESSION['message1']="What's number successfully changed";
			header("Location:profile.php");
		}
}





 ?>




<!DOCTYPE html>
<html>
<head>
	<title>change mobile no</title>
</head>
<body>
<form name="chmob" id="chmob" action="mobile.php" method="post">
	New What's App No.:<input type="text" name="mobch" id="mobch" placeholder="Enter New Number">
	<input type="submit" name="sb_btn" id="sb_btn" value="Change Number">
</form>
</body>
</html>