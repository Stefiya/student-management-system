<?php
$link=mysqli_connect("localhost","root","","studentms");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$student_name=$_POST['student_name'];
$student_rolno=$_POST['student_rolno'];
$student_address=$_POST['student_address'];
$student_email=$_POST['student_email'];

$sql="INSERT INTO student1(student_name,student_rolno,student_address,student_email)
		VALUES ('$student_name','$student_rolno','$student_address','$student_email')";
if(mysqli_query($link,$sql))
{

echo"table inserted";
header("location:select.php");
}
else{
	echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>