<?php
$link=mysqli_connect("localhost","root","","studentms");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_GET['id'];
$sql="delete from student1 where slid=$id";
if(mysqli_query($link,$sql))
{
	header("Location:select.php");
}
else
{
echo "oops!".mysqli_error($link);
}
mysqli_close($link);
?>


