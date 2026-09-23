<?php
define("pi", 3.14);
echo pi;
const Universtiy="atmiya rajkot";
echo Universtiy;
echo "<br>";
function test()
{
	define("krishna", "radha");
	echo krishna;
	/*const ram="sita";
	echo ram;*/
}
test();
echo krishna;
echo "<br>";
echo "<pre>";
print_r(getdate());
echo "</pre>";
?>