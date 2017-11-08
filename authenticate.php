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
<<<<<<< HEAD
		echo '<script language="javascript">';
		alert("Login Successful !!");
		//echo 'alert("Login Successful !!");';
		echo '</script>';
		//$message = "wrong answer";
		//echo "<script type='text/javascript'>alert('$message');</script>";
=======
>>>>>>> 45ebef1cc7da6057805af8759395b888f9b8506a
		header('Location:atm3a.php');
	}
	else
	{
		header('Location:atm3b.php');
	}
?>