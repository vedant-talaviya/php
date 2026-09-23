<?php
$con=mysqli_connect("localhost","root","","department");
if(!$con)
{
    exit();
}
$id=$_GET['id'];
$qry="delete from info where id=$id";

if(mysqli_query($con,$qry))
{
    echo "record is deleted";
}
else
{
    echo "error in deleting";
}


?>