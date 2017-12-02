<html>
<head>
	<title>ACCOUNT TYPE</title>
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
<br>
<h1 align="center">Select Account Type</h1>
<form action="atm4as.php">
<button type="submit" name="Savings">Savings Account</button>
<br>
<br>
</form>
<form action="atm4ac.php">
<button type="submit" name="Current">Current Account</button>
<br>
<br>
</form>
</div>
<div align="center">
<form action="atm2.php">
<button id="abc" type="submit">Cancel</button>
</form>
</div>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>