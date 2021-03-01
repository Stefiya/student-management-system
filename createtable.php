<?php
$link=mysqli_connect("localhost","root","","studentms");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="CREATE TABLE student1(slid int primary key(auto increment),student_name varchar(40),student_rolno int(7),student_address varchar(50),student_email varchar(50))";

if(mysqli_query($link,$sql))
{
echo "Table created";
}
else{
	echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>