<?php
if (isset($_POST['submit']))
 {
	setcookie("student['name']",$_POST['name'],time()+3600);
	setcookie("student['university']",$_POST['university'],time()+3600);
	setcookie("student['city']",$_POST['city'],time()+3600);
	echo "<br>";
	echo "cookie values are set";
	echo "<br>";
	echo "refersh the page to show cookie values";
}
if (isset($_COOKIE['student']))
 {
	foreach ($_COOKIE['student'] as $key => $value) {
		
		echo $key . ":" . $value . "<br>";
	}
}
?>