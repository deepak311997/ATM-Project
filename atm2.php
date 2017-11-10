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
#abc
{
	background-color: #EC1111;
	 margin-left:640px;
}
</style>
</head>
<body>
<div align="center">
<img src="mylogo.png"></body>
<br>
<br>
<h2>Please enter your Account Details below</h2>
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
<br>
<br>
</form>
</div>
<form action="index.php">
<button id= "abc" type="submit" style="width: 05em; height: 2em;">Cancel</button>
</form>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html> 