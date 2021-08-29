<?php

include('security.php');


if(isset($_POST['login_btn']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$query_run = mysqli_query($link, $query);

	if(mysqli_fetch_array($query_run))
	{
		$_SESSION['username'] = $username;
		header('Location: index.php');
	}
	else
	{
		$_SESSION['status'] = 'Username and Password Invalid';
		header('Location: login_form.php');
	}
}



 ?>


