<?php
$link=mysqli_connect("localhost","root","","studentms");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<title>student management system</title>
<style>
body{
border:2px solid;
padding:30px;
}
</style>
</head>
<body>
<form action="update.php" method="POST">
<h1>Student detail form</h1>
<?php
$id=$_GET['id'];
$sql="SELECT * FROM student1 where slid=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
?>
<input type="hidden" name="slid" value="<?php echo $row['slid'];?>">
student name:<input type="text" name="student_name" value="<?php echo $row['student_name']; ?>" ></br></br>
student roll number:<input type="text" name="student_rolno" value="<?php echo $row['student_rolno'];?>"></br></br>
student address:<input type="text" name="student_address" value="<?php echo $row['student_address'];?>"></br></br>
student email:<input type="email" name="student_email" value="<?php echo $row['student_email'];?>"></br>
<input type="submit" value="login">
</form>
</body>
</html>