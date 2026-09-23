<?php
/*//$arrayName = array('key' =>value ,...n );
$a=array(10,20,30);
echo $a[0];
echo $a[1];
echo $a[2];
echo "<br>";
$b=[1,2,3];
echo $b[0];
echo $b[1];
echo $b[2];
echo "<br>";
$c=array("atmiya","university","rajkot");
echo $c[0];
echo "<br>";
$x=array(10,"atmiya",10.5,6,77);
echo $x[0]=1000;
echo $x[1];
echo $x[2];
echo $x[8]=5000;
echo "<br>";
print_r($x);
echo "<br>";
for($i=0;$i<count($c);$i++)
{
   echo $c[$i];
}
echo "<br>";
//$arrayName = array('key' => ,value,....,n );
$uni=array('name'=>"Atmiya university",'city'=>"rajkot",10,2.1);
print_r($uni);
echo $uni['name'];
echo "<br>";
foreach ($uni as  $v) {
   echo $v;
}
echo "<br>";
$stud=array(array(10,20,30),array("atmiya","rajkot"));
print_r($stud);
echo "<br>";
$aryan=[5,9,1,4,3];
print_r($aryan);
//sort($aryan);
echo "<br>";
print_r($aryan);
echo "<br>";
asort($aryan);
echo "<br>";
print_r($aryan);
ksort($aryan);
print_r($aryan);
echo "<br>";
$mohit=in_array(5000, $aryan);
echo $mohit;*/

//numeric array
/*$stud=array("atmiya",10,20,10.5);
for($i=0;$i<count($stud);$i++)
{
   echo $stud[$i];
}
echo "<br>";
print_r($stud);
echo "<br>";
var_dump($stud);
echo "<br>";

//associative array
//$arrayName = array('key' =>value , );
$uni=array('name'=>"atmiya",'city'=>"rajkot",1,2,3.5);
echo "<br>";
print_r($uni);
echo "<br>";
echo $uni['name'];
echo $uni['city'];
echo "<br>";
foreach ($uni as $k => $v)
 {
   echo $k . "=>" . $v;
}
echo "<br>";

//multidimention array
$multi=array(array(1,2,3),array(10,20,30));
echo "<pre>";
print_r($multi);
echo "</pre>";*/
#array built-in functions
$stud=[2,5,8,9,6,3];
print_r($stud);
//echo sort($stud);
echo "<br>";
//print_r($stud);
//asort($stud);
echo "<br>";
print_r($stud);
echo "<br>";
print_r(rsort($stud));
print_r($stud);
echo "<br>";
echo in_array(2, $stud);
$uni=array("atmiya","rajkot","bca",10,20);
echo current($uni);
echo next($uni);
echo end($uni);
echo prev($uni);
$t=array_merge($stud,$uni);
print_r($t);
echo "<br>";
$palak=array("test",1,2,3,4,5);
echo "<br>";
print_r($palak);
//echo array_shift($palak);
echo "<br>";
print_r($palak);
//array_unshift(array, var)


?>