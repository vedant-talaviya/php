<?php

$num1 = 20;
$num2 = 10;

// Addition Function
function add($a, $b)
{
    return $a + $b;
}

// Subtraction Function
function subtract($a, $b)
{
    return $a - $b;
}

// Multiplication Function
function multiply($a, $b)
{
    return $a * $b;
}

// Division Function
function divide($a, $b)
{
    if ($b == 0)
    {
        return "Division by zero is not possible.";
    }
    return $a / $b;
}

echo "First Number = " . $num1 . "<br>";
echo "Second Number = " . $num2 . "<br><br>";

echo "Addition = " . add($num1, $num2) . "<br>";
echo "Subtraction = " . subtract($num1, $num2) . "<br>";
echo "Multiplication = " . multiply($num1, $num2) . "<br>";
echo "Division = " . divide($num1, $num2);

?>