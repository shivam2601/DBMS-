<?php
session_start();
$db=mysqli_connect("localhost","root","","registration");
if(isset($_SESSION['email'])){
	$query="SELECT * FROM info WHERE email='".$_SESSION['email']."'";
	$result=mysqli_query($db,$query);
	if(!$result){
		echo "not connected";
	}
	$row=mysqli_fetch_assoc($result);
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$dob=$row['dob'];
	$no=$row['wnumber'];
	$age=$row['age'];
	$ieee=$row['ieee'];
	$knuth=$row['knuth'];
	$jhankar=$row['jhankar'];
	$radians=$row['radians'];
}
else{
	echo '<h2 style="text-align: center;
  background-color:#006622; 
  color:white;
  padding: 14px 20px;
  margin: 8px 10px;
  border: none;
  border-radius: 50px;">'."Not yet logged in".'</h2>';
	die();

}



?>
<!DOCTYPE html>
<html>
<head>
	<title>user profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
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
<?php include("dropdown.php"); ?>
<a href="home.php"><button type="button" style="border-radius:50px;">home</button></a>
<div class="login-page">
<div class="form" style="border-radius:20px;">
<h2> Your Profile </h2>
<table>
	<tr><td><h5>FirstName:</h5></td><td><?php echo '<h4>'.$fname.'</h4>'; ?></td></tr>
	<tr><td><h5>LastName:</h5></td><td><?php echo '<h4>'.$lname.'</h4>'; ?></td></tr>
	<tr><td><h5>Email:</h5></td><td><?php echo '<h4>'.$email.'</h4>'; ?></td></tr>
	<tr><td><h5>Date_of_birth:</h5></td><td><?php echo '<h4>'.$dob.'</h4>'; ?></td></tr>
	<tr><td><h5>Whats_app_Number:</h5></td><td><?php echo '<h4>'.$no.'</h4>'; ?></td></tr>
	<tr><td><h5>Current_Semester:</h5></td><td><?php echo '<h4>'.$age.'</h4>'; ?></td></tr>
	<tr><td><h5>Hubs_Intrested:</h5></td><td><?php if($ieee==1)echo '<h4>'."ieee".'</h4>';if($knuth==1)echo '<h4>'."knuth".'</h4>';if($radians==1)echo '<h4>'."radians".'</h4>';if($jhankar==1)echo '<h4>'."jhankar".'</h4>'; ?></td></tr>
</table>

	
</div>
</div>
</body>
</html>