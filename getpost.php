<form action="" method="get">
	username<input type="text" name="nm">
	password<input type="password" name="pwd">
	<input type="submit" name="submit" value="Login">

</form>
<?php
if(isset($_GET['submit']))
{
echo $n=$_GET['nm'];
$p=$_GET['pwd'];
echo md5($p);
}

?>