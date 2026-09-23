<?php
$email = "student@gmail.co";

if (preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/", $email))
{
    echo "Valid Email";
}
else
{
    echo "Invalid Email";
}
?>