<!DOCTYPE html>
<html>
<head>
    <title>Search Student</title>
</head>
<body>

<form method="get">
    Enter Student Name:
    <input type="text" name="student">
    <input type="submit" value="Search">
</form>

<?php

// Student array
$students = array("Amit", "Rahul", "Neha", "Priya", "Karan", "Riya", "Haresh");

if(isset($_GET['student']))
{
    $search = trim($_GET['student']);

    if(in_array($search, $students))
    {
        echo "<h3>Student Found: " . $search . "</h3>";
    }
    else
    {
        echo "<h3>Student Not Found</h3>";
    }
}

?>

</body>
</html>