<?php
	session_start();
	$loginpin=$_SESSION['db_pass'];
	$oldpin=$_POST['oldpin'];
	$pin=$_POST['pin'];
	$repin=$_POST['pin1'];
	$conn=mysqli_connect('localhost','root','','atm');
	if($pin==$repin&&$loginpin==$oldpin)
	{	
		$sql="update account_details set atm_pin =$repin WHERE acc_no = '$_SESSION[db_usr]'";
		mysqli_query($conn, $sql);
		echo '<script language="javascript">';
		echo 'alert("Pin Successfully Changed !!");window.location="index.php"';
		echo '</script>';
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Pin Incorrect or Pin Mismatched !! Try Again");window.location="index.php"';
		echo '</script>';
	}
?>