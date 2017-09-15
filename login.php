<?php
session_start();
$db=mysqli_connect("localhost","root","","registration")
or
die("Cannot connect");
if(isset($_POST["login_bt"])){
	$username=$_POST['username'];
	$password=$_POST["password"];
	$password=md5($password);
	$query="SELECT * from info where email='$username' and password='$password'";
	$result=mysqli_query($db,$query);
	if(!$result){
		echo "not connected";
	}
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['username']=$row['fname'];
		$_SESSION['email']=$username;
		$_SESSION['message']="You have successfully loged in";
		header("Location:home.php");
	}
	else{
		echo '<h4 style="text-align:center;
  				background-color: #4CAF50;
 				 color:white;
  				padding: 14px 20px;
  				margin: 8px 10px;
  				border: none;
  				border-radius: 4px;">'.'Wrong Username or Password'.'</h4>';
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<?php if(isset($_SESSION['message1'])){
	echo '<h4 style="text-align:center;
  				background-color: #4CAF50;
 				 color:white;
  				padding: 14px 20px;
  				margin: 8px 10px;
  				border: none;
  				border-radius: 50px;">'.$_SESSION['message1'].'</h4>';
	unset($_SESSION['message1']);
	}  ?>
<a href="register.php"><button type="button" style="border-radius:50px; float:right;">register</button></a>
<a href="home.php"><button type="button" style="border-radius:50px; float:left;">home</button></a>

<div class="login-page">
<div class="form" style="border-radius:20px;">

<form method="POST" action="login.php"  name="myform" class="login-form">
<frameset>
	<input type= "email" name="username" id="username" placeholder="Enter your username">
	<input type="password" name="password" id="password" placeholder="Password">
	<input type="submit" name="login_bt" value="LOGIN" id="btn">


</frameset>
	
</form>
</div>
</div>

</body>
</html>