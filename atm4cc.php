<?php
	session_start();
?>
<html>
<head>
	<title>BALANCE ENQUIRY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
button {
  color: #000000;
  font-weight: bold;
  width: 15em;
  height: 2em;
}
</style>
</head>
<body>
	<div align="center">	
<img src="mylogo.png" alt="State Bank of India">
<br>
<br>
</div>
<?php
	$conn=mysqli_connect('localhost','root','','atm');
	$sql="select current_balance from current_account where c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]')";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) 
	{
		 while($row=mysqli_fetch_assoc($result)) 
		 {

        	echo "<div align='center' style='margin-top:150px'> <h2><i> The Available Current Account Balance is " . $row["current_balance"] . "<br>"."Thank you for Banking with us!"."</i></h2></div>" ."<br>";
    	}
	} 
?>
<form action="index.php">
	<div align="center">
		<button type="submit" value="Submit">Click here to go Back</button>
	</div>
</form>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>