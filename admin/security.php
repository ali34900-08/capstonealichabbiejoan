<?php

session_start();

include('database/config.php');

if($link)
{

}
else
{
	header('Location: database/config.php');
}
if(!$_SESSION['username'])
{
	header('Location:login_form.php');
}



 ?>