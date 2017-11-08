<?php
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$_SESSION['db_usr']=$username;
	$_SESSION['db_pass']=$password;
	$conn=mysqli_connect('localhost','root','','atm');
	//Check if the client exists
	$check=mysqli_query($conn,"select * from account_details where acc_no='$username' and atm_pin='$password'");
	if(mysqli_num_rows($check)!=0)
	{
		header('Location:atm3a.php');
		$message1 = "Login Successful!";
		echo "<script type='text/javascript'>window.alert('$message1');</script>";
	
	}
	else
	{
		header('Location:atm3b.php');
		$message2 = "Wrong Username or Password!";
		echo "<script type='text/javascript'>window.alert('$message2');</script>";
	
	}
?>