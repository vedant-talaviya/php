<?php
echo chr(97);
echo "<br>";
echo ord("a");
echo "<br>";
echo strtolower("Atmiya University");
echo "<br>";
echo strtoupper("atmiya");
echo "<br>";
echo strlen("atmiya ");
echo "<br>";
//$t=trim(" atmiya university ");
echo "<br>";
$t=" atmiya University  ";
echo strlen($t);
echo "<br>";
$e=trim($t);
echo strlen($e);
echo "<br>";
echo strrev("abc");
echo "<br>";
$u=explode("i", "atmiya university rajkot");
print_r($u);
echo "<br>";
echo md5("atmiya");

?>