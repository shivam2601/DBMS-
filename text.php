<?php
$host='localhost';
$username='root';
$password='';
if(!@mysql_connect($host,$username,$password)){
	die('can not connect');
}
else{
	if(@mysql_select_db('snehil'))
	{
		echo "connected to database";
	}
	else{
		die('cannot connect');
	}
}


?>