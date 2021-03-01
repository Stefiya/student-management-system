<html>
<head>
<title></title>
</head>
<style>
table,th,tr,td{
	
	border:2px solid;
	border-collapse:collapse;}
</style>
<body>
<table>


<?php
$link=mysqli_connect("localhost","root","","studentms");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="SELECT * FROM student1";
if($result=mysqli_query($link,$sql));

{	
if(mysqli_num_rows($result) > 0)
{
echo "<table>";
echo "<tr>";
                echo "<th>slid</th>";
                echo "<th>student_name</th>";
                echo "<th>student_rolno</th>";
				echo "<th>student_address</th>";
				echo "<th>student_email</th>";
               
         echo "</tr>";

while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['slid'] . "</td>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['student_rolno'] . "</td>";
				echo "<td>" . $row['student_address'] . "</td>";
                echo  "<td>". $row['student_email'] . "</td>";
				echo "<td><a href='update_form.php?id=".$row['slid']."'>update</a>/
				      <a href='delete.php?id=".$row['slid']."'>delete</a></td>";
                 echo "</tr>";

        }
        echo "</table>";
 mysqli_free_result($result);
    }
 else{
    echo "ERROR: $sql ." . mysqli_error($link);
}
}
mysqli_close($link);
?>
</table>
</body>
</html>