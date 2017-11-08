<?php
	session_start();
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="uitheme.css">
</head>
<body>
<?php
	$conn=mysqli_connect('localhost','root','','atm');
	$sql="select current_balance from current_account where c_id=(select c_id from account_details where acc_no=$_SESSION['db_usr'])";
	$result=mysqli_query($conn,$sql);
	echo "The Current Account Balance is " . result . ".<br>";	
?>	
</body>
</html>