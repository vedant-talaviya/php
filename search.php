
<form method="get">
    Enter Student Name:
    <input type="text" name="student">
    <input type="submit" value="Search">
</form>

<?php
if(isset($_GET['student']))
{
    echo "Searching for: " . $_GET['student'];
}
?>