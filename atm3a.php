<!--authentication successful-->
<html>
<head>
	<title>ATM MENU</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
input[type=submit]
{
	background-color:gray;
	width: 17%;
	color: white;
	width: 13em;
	height: 2em;
}
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
<h4>Select any one from the options below</h4>
<form action="atmactw.php">
<button type="submit" name="Withdraw">Withdraw Cash</button>
<br><br>
</form>
<form action="atmactd.php">
<button type="submit" name="Deposit">Deposit Cash</button>
<br><br>
</form>
<form action="atm4c.php">
<button type="submit" name="Balance">Enquire Balance</button>
<br><br>
</form>
<form action="temp.html">
<button type="submit" name="Mini Statement">Mini Statement</button>
<br><br>
</form>
<form action="atm4e.php">
<button type="submit" name="Change Pin">Change PIN</button>
<br><br>
</form>
</div>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>