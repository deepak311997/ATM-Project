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
<br>
<div class="panel">
<h2>Complete your Sign-up</h2>
</div>
<form class="back" action="signupintodb.php" method="POST">
<label>Enter Bank Id : </label><input type="text" name="bid" placeholder="Bank Id"><br><br>
<label>Enter Account No : </label><input type="text" name="acc" placeholder="Account Number"><br><br>
<label>Enter First Name : </label><input type="text" name="fname" placeholder="First Name"><br><br>
<label>Enter Last Name : </label><input type="text" name="lname" placeholder="Last Name"><br><br>
<label>Enter Address : </label><input type="text" name="address" placeholder="Address"><br><br>
<label>Enter Mobile No : </label><input type="text" name="phno" placeholder="Mobile Number"><br><br>
<label>Enter Pin : </label><input type="Password" name="pass1" placeholder="Password"><br><br>
<label>Re-enter Pin : </label><input type="Password" name="pass2" placeholder="Password"><br><br>
<input type="submit" value="Signup"><br><br>
</form>
</div>
</body>
</html>