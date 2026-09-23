<?php
echo $name="atmiya universtiy";
echo $a=10;
echo $b=10.5;
echo "<br>";
function show()
{
	$x=100;
	echo $x;
}
show();
//echo $x;
$y=200;
function test()
{
	global $y;
	echo $y;
}
test();
echo $y;
echo "<br>";
function counter()
{
	static $count=0;
	$count++;
	echo $count;
}
counter();
counter();
counter();

?>