<!--authentication successful-->
<html>
<head>
	<title>ATM MENU</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
button 
{
  font-weight: bold;
  width: 11em;
  height: 2em;
  display: inline-block;
  text-decoration: none;
  text-align: center;
  color:  #000000;
  background-color: #ffffff;
  cursor: pointer;
}
button:active
{
	background-color: #d9d9d9;
  transform: translateY(4px);
}
 button:hover 
{
	background-color: #d9d9d9;
}
#abc
{
	background-color: #ff0000;
	box-shadow: rgb(255,0,0), hsl(0,100%,50%);
	cursor: pointer;
	width: 07em;
	height: 2em;
}
#abc:hover
{
	background-color: #cc0000;
}
#abc:active
{
  background-color: #cc0000;
  box-shadow: 5px;
  transform: translateY(4px);

}
</style>
</head>
<body>
<div align="center">	
<img src="mylogo.png" alt="State Bank of India">
<br>
<h2>Select any one from the options below</h2>
<form action="atmactw.php">
<button type="submit" name="Withdraw">Withdraw Cash</button>
<br><br>
</form>
<form action="atmactd.php">
<button type="submit" name="Deposit">Deposit Cash</button>
<br><br>
</form>
<form action="atmacbs.php">
<button type="submit" name="Balance">Enquire Balance</button>
<br><br>
</form>
<form action="transaction.php">
<button type="submit" name="Mini Statement">Mini Statement</button>
<br><br>
</form>
<form action="atm4e.php">
<button type="submit" name="Change Pin">Change PIN</button>
<br><br>
</form>
</div>
<div align="center">
<form action="index.php">
<button id="abc" type="submit">Cancel</button>
</form>
</div>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>