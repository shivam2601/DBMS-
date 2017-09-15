<?php
session_start();
$db=mysqli_connect("localhost","root","","registration")
or
die("Cannot connect");
if(isset($_POST["submit_bt"])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$password2=$_POST["password2"];
	$wno=$_POST["wno"];
	$dob=$_POST["dob"];
	$age=$_POST["age"];
	if(isset($_POST['mieee'])&&$_POST['mieee']=='1')$mieee=1;else $mieee=0;
	if(isset($_POST['mknuth'])&&$_POST['mknuth']=='1')$mknuth=1;else $mknuth=0;
	if(isset($_POST['mjhankar'])&&$_POST['mjhankar']=='1')$mjhankar=1;else $mjhankar=0;
	if(isset($_POST['mradians'])&&$_POST['mradians']=='1')$mradians=1;else $mradians=0;
	if(isset($_POST['ieee'])&&$_POST['ieee']=='1')$ieee=1;else $ieee=0;
	if(isset($_POST['knuth'])&&$_POST['knuth']=='1')$knuth=1;else $knuth=0;
	if(isset($_POST['jhankar'])&&$_POST['jhankar']=='1')$jhankar=1;else $jhankar=0;
	if(isset($_POST['radians'])&&$_POST['radians']=='1')$radians=1;else $radians=0;
	
	
	
	if ($password==$password2) {
		$password=md5($password);
		$query2="SELECT email from info where email='".$email."'";
		$result2=mysqli_query($db,$query2);
		if(mysqli_num_rows($result2)!=0){
			$_SESSION['message1']="Username Already Exists";
			header("Location:login.php");
			exit();
		}
		else{
		$query="INSERT INTO info (fname,lname,email,password,wnumber,dob,age,mieee,mknuth,mjhankar,mradians,ieee,knuth,jhankar,radians) values('".$firstname."','".$lastname."','".$email."','".$password."','".$wno."','".$dob."','".$age."','".$mieee."','".$mknuth."','".$mjhankar."','".$mradians."','".$ieee."','".$knuth."','".$jhankar."','".$radians."')";
		$result=mysqli_query($db,$query);

		if(!$result){echo "Cannot execute"; 
	    exit();}
		$_SESSION['username']=$firstname;
		$_SESSION['email']=$email;
		$_SESSION['message']="You have succesrully registered";
		header("Location:home.php");
	}
	}
	else{
		$_SESSION['message']="password do not match";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>register page</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<a href="login.php"><button type="button" style="float:right;">Log in</button></a>
<a href="home.php"><button type="button" style="float:left;">home</button></a>
<div class="login-page">
<div class="form" style="border-radius:20px;">
<form method="POST" action="register.php"  name="myform" class="login-form" onsubmit="return validate()">
<h2> Registration form</h2>
<table>
	<tr><td>First name:</td><td><input type="text" name="firstname" id="firstname" placeholder="Firstname"></td></tr>
	<tr><td>Last name:</td><td><input type="text" name="lastname" id="lastname" placeholder="Lastname"><td></tr><br>
	<tr><td>Email:</td><td><input type="email" name="email" id="email" placeholder="Email serves as username"><td></tr><br>
	<tr><td>Password:</td><td><input type="password" name="password" id="password" placeholder="Password"><td></tr><br>
	<tr><td>Confirm Password:</td><td><input type="password" name="password2" id="password2" placeholder="Confirm Password"><td></tr><br>
	<tr><td>Whats app number:</td><td><input type="text" name="wno" id="wno" placeholder="serves as contact no."><td></tr><br>
	<tr><td>Date of Birth:</td><td><input type="date" name="dob" id="dob"><td></tr><br>
	<tr><td>Current Semester:</td><td><input type="number" name="age" min="1" max="8" placeholder="Curent Semester"><td></tr>
	<tr><td colspan="4"><h4>Member of Hubs:</h4><input type="checkbox" name="mieee" value='1'><h6>IEEE</h6>
	<input type="checkbox" name="mknuth" value='1'><h6>KNUTH</h6>
	<input type="checkbox" name="mjhankar" value='1'><h6>JHANKAR</h6>
	<input type="checkbox" name="mradians" value='1'><h6>RADIANS</h6></td></tr>
	<tr><td colspan="4"><h4>Intrested in Hubs:</h4><input type="checkbox" name="ieee" value='1' id="ieee"><h6>IEEE</h6>
	<input type="checkbox" name="knuth" value='1' id="knuth"><h6>KNUTH</h6>
	<input type="checkbox" name="jhankar" value='1' id="jhankar"><h6>JHANKAR</h6>
	<input type="checkbox" name="radians" value='1' id="radians"><h6>RADIANS</h6></td></tr>
	<tr><td><input type="submit" name="submit_bt" value="REGISTER" id="btn" style="border-radius:50px"></td></tr>
</table>

	
</form>
</div>
</div>
</body>
</html>
<script type="text/javascript">
	var fname=document.forms['myform']['firstname'];
	var lname=document.forms['myform']['lastname'];
	var email=document.forms['myform']['email'];
	var password=document.forms['myform']['password'];
	var password2=document.forms['myform']['password2'];
	var wno=document.forms['myform']['wno'];
	var dob=document.forms['myform']['dob'];
	var age=document.forms['myform']['age'];
	var ieee=document.forms['myform']['ieee'];
	var knuth=document.forms['myform']['knuth'];
	var jhankar=document.forms['myform']['jhankar'];
	var radians=document.forms['myform']['radians'];

	function validate(){
		if (fname.value=="") {
			alert("First name required");
			return false;
		}
		else{
			fname.value=fname.value.toUpperCase();
		}

		if (lname.value=="") {
			alert("Lastname required");
			return false;
		}
		else{
			lname.value=lname.value.toUpperCase();
		}
		if(email.value==""){
			alert("Email is mandatory");
			return false;
		}

		if (password.value==""||password.value.length<6) {
			alert("Password required and Should be 6 character long");
			return false;
		}
		 re = /[0-9]/;
      	if(!re.test(password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        return false;
      }
        re = /[a-z]/;
       if(!re.test(password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        return false;
      }

		if (password.value!=password2.value) {
			alert("Two password do not match");
			return false;
		}

		if (wno.value==""||wno.value.length!=10||isNaN(wno.value)) {
			alert("Whats app no. should be of 10 digit");
			return false;
		}

		if (dob.value=="") {
			alert("Date of Birth required");
			return false;
		}

		if (age.value=="") {
			alert("Current Semester required");
			return false;
		}
		if(ieee.checked==false&&knuth.checked==false&&jhankar.checked==false&&radians.checked==false){
			alert("Show intrest in atleast one Hub!!");
			return false;
		}
	}
</script>