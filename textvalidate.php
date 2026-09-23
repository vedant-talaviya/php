<?php
$name = "Haresh";

if (preg_match("/^[A-Za-z]+$/", $name))
{
    echo "Valid Name";
}
else
{
    echo "Invalid Name";
}
?>