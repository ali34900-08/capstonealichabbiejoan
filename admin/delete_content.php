<?php
include('database/config.php');

if(isset($_POST['delete_content']))
{
	$id = $_POST['selector'];
	$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"DELETE FROM content where content_id='$id[$i]'");
}
header("location: content.php");
}



 ?>