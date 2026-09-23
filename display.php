
	<table border="1">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>city</th>
		<th>delete</th>
		<th>update</th>			
	</tr>
<?php
$con=mysqli_connect("localhost","root","","department");
if(!$con)
{
	exit();
}
$qry="select * from info";
$result=mysqli_query($con,$qry);
print_r($result);
echo "</br>";
$r=mysqli_field_count($con);
echo $r;
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['city'] . "</td>";
		echo "<td>";
		echo "<a href='delete.php?id=" . $row['id'] ."'>delete</a>";
		echo "</td>";
		echo "<td>";
		echo "<a href='update.php?id=" . $row['id'] ."'>update</a>";
		echo "</td>";
		echo "</tr>";
	}
}
echo "</table>";

?>