<?php

$con=mysqli_connect("localhost","root","","university");

if(!$con)
{
    die("Database connection failed");
}

$id=$_GET['id'];

/* Fetch existing record */
$qry="SELECT * FROM student WHERE id=$id";

$result=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);
?>

<form method="post">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Name:
    <input type="text" name="name" value="<?php echo $row['name']; ?>">
    
    <br><br>

    Dept:
    <input type="text" name="Dept" value="<?php echo $row['dept']; ?>">
    
    <br><br>

    mob:
    <input type="text" name="mob" value="<?php echo $row['mob']; ?>">
    
    <br><br>

    dob:
    <input type="text" name="dob" value="<?php echo $row['dob']; ?>">
    
    <br><br>

    <input type="submit" name="update" value="Update Record">

</form>

<?php

if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $dept=$_POST['dept'];
    $mob=$_POST['mob'];
    $dob=$_POST['dob'];

    $qry="UPDATE student SET name='$name', dept='$dept', mob='$mob', dob='$dob', WHERE id=$id";

    if(mysqli_query($con,$qry))
    {
        echo "Record updated successfully";
    }
    else
    {
        echo "Error updating record";
    }
}

?>