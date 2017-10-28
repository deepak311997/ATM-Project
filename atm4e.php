<!--change pin code-->
<!DOCTYPE html>
<html>
<head>
	<title>Change Pin</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<!link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<img src="logo.png" alt="State Bank of India" width=800px height=150px>
<br>
<br>
<form action="atm1.php" class="box" >
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
<footer><b>Copyrights &copy; State Bank of India 2018</b></footer>
</html>