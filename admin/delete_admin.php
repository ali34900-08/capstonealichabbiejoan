<?php
include('database/config.php');

if(isset($_POST['delete_admin']))
{
	$id = $_POST['selector'];
	$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"DELETE FROM users where id='$id[$i]'");
}
header("location: admin_user.php");
}



 ?>