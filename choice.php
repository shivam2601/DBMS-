<?php  
session_start();
$db=mysqli_connect("localhost","root","","registration")
or
die("not connected");

if (isset($_POST['sb_btn'])) {
	if(isset($_POST['ieee'])&&$_POST['ieee']=='1')$ieee=1;else $ieee=0;
	if(isset($_POST['knuth'])&&$_POST['knuth']=='1')$knuth=1;else $knuth=0;
	if(isset($_POST['jhankar'])&&$_POST['jhankar']=='1')$jhankar=1;else $jhankar=0;
	if(isset($_POST['radians'])&&$_POST['radians']=='1')$radians=1;else $radians=0;
		$query="UPDATE info SET ieee='".$ieee."', knuth='".$knuth."',jhankar='".$jhankar."',radians='".$radians."' WHERE email= '".$_SESSION['email']."'";
		$result=mysqli_query($db,$query);
		if(!$result){
			echo "not connected";
		}
		else{
			$_SESSION['message1']="Hubs Intrested successfully changed";
			header("Location:profile.php");
		}
}





 ?>




<!DOCTYPE html>
<html>
<head>
	<title>change choice</title>
</head>
<body>
<form name="chcho" id="chcho" action="choice.php" method="post">
<table>
<tr><td colspan="4"><h4>Intrested in Hubs:</h4><input type="checkbox" name="ieee" value='1' id="ieee"><h6>IEEE</h6>
	<input type="checkbox" name="knuth" value='1' id="knuth"><h6>KNUTH</h6>
	<input type="checkbox" name="jhankar" value='1' id="jhankar"><h6>JHANKAR</h6>
	<input type="checkbox" name="radians" value='1' id="radians"><h6>RADIANCE</h6></td>
	<td><input type="submit" name="sb_btn" id="sb_btn" value="Change Chioce's"></td></tr>
	</table>
</form>
</body>
</html>