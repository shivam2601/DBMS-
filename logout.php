<?php
session_start();
session_destroy();
unset($_SESSION['message']);
session_start();
$_SESSION['message1']="You are now logged out";
header("Location:login.php");

?>