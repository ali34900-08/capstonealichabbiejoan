<?php 


// user code
include('security.php');

// register
if(isset($_POST['registerbtn']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	

	if($password == $cpassword)
	{
		$query = "INSERT INTO users (username, password, firstname, lastname) VALUES ('$username', '$password', '$firstname', '$lastname') ";
		$query_run = mysqli_query($link, $query);	

		if($query_run)
		{
			$_SESSION['success'] = "Succesfully Added User";
			header('location: admin_user.php');
		}
		else{
			$_SESSION['status'] = "Added User Failed";
			header('location: admin_user.php');
		}
	}
	else{
		$_SESSION['status'] = "Password Not Match, Try again pleasee!";
			header('location: admin_user.php');
	}
	

}


// teacher code



// register
if(isset($_POST['register_btn']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	

	if($password == $cpassword)
	{
		$query = "INSERT INTO teacher (username, password, firstname, lastname, address) VALUES ('$username', '$password', '$firstname', '$lastname', '$address') ";
		$query_run = mysqli_query($link, $query);	

		if($query_run)
		{
			$_SESSION['success'] = "Student Succesfully Registered";
			header('location: teacher_register.php');
		}
		else{
			$_SESSION['status'] = "Student Failed to Registered";
			header('location: student_register.php');
		}
	}
	else{
		$_SESSION['status'] = "Password Not Match, Try again pleasee!";
			header('location: teacher_register.php');
	}
	

}



// student code



// register
if(isset($_POST['register_button']))
{
	
	$stud_id=$_POST['studentid'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middlename=$_POST['middlename'];
	$address=$_POST['address'];
	$class=$_POST['class'];

	if($password == $cpassword)
	{
		$query = "INSERT INTO student (student_id, password, firstname, lastname, middlename, address, class_id) VALUES ('$stud_id', '$password', '$firstname', '$lastname', '$middlename', '$address', '$class') ";
		$query_run = mysqli_query($link, $query);	

		if($query_run)
		{
			$_SESSION['success'] = "Student Succesfully Registered";
			header('location: student_register.php');
		}
		else{
			$_SESSION['status'] = "Student Failed to Registered";
			header('location: student_register.php');
		}
	}
	else{
		$_SESSION['status'] = "Password Not Match, Try again pleasee!";
			header('location: student_register.php');
	}
	

}


// content


if(isset($_POST['add_btn']))
{
	
	$title=$_POST['title'];
	$textarea=$_POST['textarea'];
	
	

	
		$query = "INSERT INTO content (title, content) VALUES ('$title', '$textarea') ";
		$query_run = mysqli_query($link, $query);	

		if($query_run)
		{
			$_SESSION['success'] = "Succesfully Added User";
			header('location: content.php');
		}
		else{
			$_SESSION['status'] = "Added User Failed";
			header('location: content.php');
		}
}


