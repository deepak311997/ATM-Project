<?php
	session_start();
?>
<html>
<head>
	<title>BALANCE ENQUIRY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
</head>
<body>
<?php
	$conn=mysqli_connect('localhost','root','','atm');
	$sql="select current_balance from current_account where c_id=(select c_id from account_details where acc_no=$_SESSION['db_usr'])";
	$result=mysqli_query($conn,$sql);
	echo "The Current Account Balance is " . result . ".<br>";	
?>	
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>