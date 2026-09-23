<?php
setcookie("username","atmiya",time()+3600);
if(isset($_COOKIE['username']))
{
	echo "the value of cookie is " . $_COOKIE['username'];
}
else
{
	echo "cookie is no set";
}
?>