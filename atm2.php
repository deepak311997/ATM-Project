<html>
<head>
	<title>LOGIN</title>
	<script type='text/javascript' src='authenticate.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
button
{
	font-weight: bold;
	width: 07em;
	height: 2em;
	color: #000000;
}
</style>
</head>
<body>
<div align="center">
<img src="mylogo.png"></body>
<br>
<br>
<form action="authenticate.php" method="POST" class="box">
<label>Enter Account Number:</label><br>
  <input name="username" type="text" placeholder="Enter Account number" >
  <br>
  <br>
  <label>Enter ATM Pin:</label><br>
 <input name="password" type="password" placeholder="Enter ATM Pin" >
  <br><br>
<button type="submit">Login</button>
</form>
</div>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html> 