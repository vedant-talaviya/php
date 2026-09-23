<?php
session_start();
echo session_id();
echo "<br>";
if(isset($_POST['submit']))
{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['pwd']=$_POST['pwd'];
	print_r($_SESSION);
	unset($_SESSION['username']);
	echo "<br>";
	print_r($_SESSION);
	session_destroy();
	
}
?>