<?php
session_start();

?>
<html>
<head>

  <script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="home.css" />
	
</head>
<body>
<a href="profile.php"><button type="button" style="float:left;">Profile</button></a>
<?php if (!isset($_SESSION['username'])) {
echo '<a href="login.php">'.'<button type="button" style="float:center;">'.'Log in'.'</button>'.'</a>';}?>
<a href="register.php"><button type="button" style="float:right;">register</button></a>
<?php if(isset($_SESSION['username'])) echo '<a href="logout.php">'.'<button type="button" style="float:center;width:33.33%; margin-top:0px; margin-left:0px; box-shadow: 20px 20px 20px 20px rgba(0, 0, 0, 0.75), 0 5px 5px 0 rgba(0, 0, 0, 0.5);">'."Logout".'</button>'.'</a>'; ?>
<div class="first">


	<div id="f1">
	<h3 style="font-family: 'Yesteryear', cursive; color:#bfbfbf; font-size:60px; margin-top:0px; margin-left:10px;">jaypee insider.com</h3>
		
	</div>
	<div id="f2">
		<?php if(isset($_SESSION['message']))echo '<h4>'.$_SESSION['message'].'</h4>'; ?>
<h4 style="color:#00ff00;">Welcome <?php if(isset($_SESSION['username']))echo $_SESSION['username']; else echo "You are not logged in"; ?></h4><br>
	</div>
</div>
<div id="hislider1" style=" width:95%;max-height:400px;height:100%; margin-top: 35px; margin-left:30px; opacity:0.5px;"></div>


<div class="second">

   <div id="s1"><img src="ieee.jpg" style="height:95%; width:95%; margin-left: 12px; margin-top: 8px; border-radius: 0px; cursor: pointer; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);"></div>
   <div id="s2"><img src="kunth.jpe" style="height:95%; width:95%; margin-left: 12px; margin-top: 8px; border-radius: 0px; cursor: pointer; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);"></div>
</div>

<div class="third">

   <div id="t1"><img src="radians.jpg" style="height:95%; width:95%; margin-left: 12px; margin-top: 8px; border-radius: 0px; cursor: pointer;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); "></div>
   <div id="t2"><img src="jhankar.jpg" style="height:95%; width:95%; margin-left: 12px; margin-top: 8px; border-radius: 0px; cursor: pointer; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);" ></div>
</div>
<div class="fourth">
<marquee direction="right" behavior="alternate"><h2 style="color:#bfbfbf;" scrollamount="10">Project Preapred By:<br>SNEHIL SRIVASTAVA(backend & frontend developer)<br>SOMYA BHATNAGAR(backend & frontend developer)<br>KARTIK SHARMA(frontend developer)<br>SHIVAM CHIMRA(backhand developer) </h2></marquee>	
</div></marquee>
	
</body>
</html>
<script type="text/javascript">
	function validate(){
		alert("Allready Logged In!!");
		return false;
	}
</script>