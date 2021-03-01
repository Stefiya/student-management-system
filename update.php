<?php
$link=mysqli_connect("localhost","root","","studentms");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_POST['slid'];
$name=$_POST['student_name'];
$rolno=$_POST['student_rolno'];
$address=$_POST['student_address'];
$email=$_POST['student_email'];
$sql="update student1 set student_name='$name', student_rolno='$rolno', student_address='$address', student_email='$email' where slid=$id";
if(mysqli_query($link,$sql))
{
echo "records updated";
header("location:select.php");
}
else
{
echo "oops!".mysqli_error($link);
}
mysqli_close($link);
?>


