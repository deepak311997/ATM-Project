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
</style>
</head>
<script>
	function auth1()
	{
		alert("Pin Code has been Successfully Changed");
	}
</script>
<body>
<div align="center">
<img src="mylogo.png" alt="State Bank of India">
<br>
<br>
<form action="index.php">
	Enter Current PIN: <input  type="password" name="Old PIN" placeholder="Old PIN">
	<br>
	<br>
	Enter New PIN : <input type="password" name="New PIN" placeholder="New PIN">
	<br>
	<br>
	Re-Enter New PIN : <input type="password" name="Re-Enter New PIN" placeholder="Re-Enter PIN">
	<br>
	<br>
	<input type="submit" value="Confirm PIN change" onclick="auth1()">
	<br>
	<br>
</form>
</div>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>