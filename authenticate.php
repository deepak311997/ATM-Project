<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username=="admin"&&$password=="1234")
	{
		echo '<script language="javascript">';
		echo 'alert("Login Successful !!");';
		echo '</script>';
		//$message = "wrong answer";
		//echo "<script type='text/javascript'>alert('$message');</script>";
		header('Location:atm3a.php');
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Login UnSuccessful !!");';
		echo '</script>';
		header('Location:atm2.php');
	}
?>