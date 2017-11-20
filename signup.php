<html>
<head>
	<title>Signup</title>
	<script type='text/javascript' src='authenticate.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
<style>
button 
{
  font-weight: bold;
  width: 07em;
  height: 2em;
  display: inline-block;
  text-decoration: none;
  text-align: center;
  color:  #000000;
  background-color: #ffffff;
  cursor: pointer;
  border-radius: 8px;
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
<img src="mylogo.png"></body>
<br>
<div class="panel">
<h2>Complete your Sign-up</h2>
</div>
<form class="back" action="signupintodb.php" method="POST">
<select name="bid" style="border-radius: 6px; font-size: 17px; width: 220px;">
	<span class="glyphicon glyphicon-add-user"></span><option>Select Bank Id</option>
	<option value="1">1-Vidyaranyapura</option>
	<option value="2">2-Hebbal</option>
	<option value="3">3-New Bel</option>
	<option value="4">4-R.T Nagar</option>
	<option value="5">5-Malleshwaram</option>
	<option value="6">6-Indiranagar</option>
	<option value="7">7-M.G Road</option>
	<option value="8">8-Cunningham Road</option>
	<option value="9">9-Sahakarnagar</option>
	<option value="10">10-J.P Nagar</option>
</select><br><br>
<i class="glyphicons glyphicons-user-add"></i><input style="border-radius: 6px; font-size: 17px; " type="text" name="acc" placeholder="Account Number"><br><br>
<i class="glyphicon glyphicon-cloud"></i><input style="border-radius: 6px; font-size: 17px; " type="text" name="fname" placeholder="First Name"><br><br>
<i class="glyphicon glyphicon-cloud"></i><input style="border-radius: 6px; font-size: 17px; " type="text" name="lname" placeholder="Last Name"><br><br>
<i class="glyphicon glyphicon-home"></i><input style="border-radius: 6px; font-size: 17px; " type="text" name="address" placeholder="Address"><br><br>
<i class="glyphicon glyphicon-earphone"></i><input style="border-radius: 6px; font-size: 17px; " type="text" name="phno" placeholder="Mobile Number"><br><br>
<i class="glyphicon glyphicon-lock"></i><input style="border-radius: 6px; font-size: 17px; " type="Password" name="pass1" placeholder="Password"><br><br>
<i class="glyphicon glyphicon-lock"></i><input style="border-radius: 6px; font-size: 17px; " type="Password" name="pass2" placeholder="Confirm Password"><br><br>
<input style="border-radius: 6px; font-size: 17px; background-color:  #33cc33;" type="submit" value="Signup"><br><br>
</form>
</div>
</body>
</html>
