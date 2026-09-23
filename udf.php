<?php

/*function NAME([argumnet....N])
{
	code;
	[return];
}
NAME([value]);
NAME([value]);*/
//simple function
function test()
{
	echo "this is test file";
}
test();
echo "<br>";
#argument function 
function uni($name)
{
	echo $name;
}
uni("atmiya univesriytt");
echo "<br>";
//call value
function add($num)
{
	echo $num=$num+10;
}
$x=5;
add($x);
echo $x;
echo "<br>";
//call ref
function addten(&$num)
{
	echo $num=$num+10;
}
$x=5;
addten($x);
echo $x;
echo "<br>";
function sum($x,$y)
{
	$z=$x+$y;
	return $z;
}
echo sum(10,20);
echo "<br>";
function add1($x,$y,$z=5)
{
	echo $x+$y+$z;
}
add1(1,2,3);
echo "<br>";
add1(1,2);
echo "<br>";
function one($name)
{
	echo $name;
}
function two()
{
	echo "this is two";
	one("this is one");
}
two();
function krishna($name)
{
echo $name;
}
$k="krishna";
$k("yadav");
function variable_len(...$name)
{
	foreach ($name as $k)
	 {
		echo $k;
			}
}
variable_len("haresh","amit","ambrish");
?>