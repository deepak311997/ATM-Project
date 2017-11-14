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
button 
{
 
  width: 11em;
  height: 2em;
  display: inline-block;
  text-decoration: none;
  text-align: center;
  color:  #fff;
  background-color: #4CAF50;
  box-shadow: 9px;
  cursor: pointer;
}
button:active
{
  background-color: #3e8e41;
  box-shadow: 5px;
  transform: translateY(4px);
}
 button:hover 
{
  background-color: #3e8e41;
  box-shadow: 9px;
}
#abc
{
  background-color: #ff0000;
  box-shadow: rgb(255,0,0), hsl(0,100%,50%);
  cursor: pointer;
  width: 05em;
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
<div align="center">
	<form action="index.php">
		<button id="abc" type="submit">Cancel</button>
	</form>
</div>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>