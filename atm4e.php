<!--change pin code-->
<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PIN</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
input[type=submit]
{
	background-color:gray;
	width: 15%;
	color: white;
}
button {
  color: #000000;
  font-weight: bold;
  width: 11em;
  height: 2em;
}
</style>
</head>
<body>
<div align="center">
<img src="mylogo.png" alt="State Bank of India">
<br>
<br>
<form method="POST" action="change_pin_check.php">
	Enter Current PIN: 
	<br>
	<input  type="password" name="oldpin" placeholder="Old PIN"><br><br>
	Enter New PIN : 
	<br>
	<input type="password" name="pin" placeholder="New PIN"><br><br>
	Re-Enter New PIN : 
	<br>
	<input type="password" name="pin1" placeholder="Re-Enter PIN"><br><br><br>
	<button type="submit">Confirm PIN change</button>
	<br>
	<br>
</form>
</div>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>