<?php
include('database/config.php');

if(isset($_POST['delete_student']))
{
	$id = $_POST['selector'];
	$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"DELETE FROM student where id='$id[$i]'");
}
header("location: student_register.php");
}



 ?>