<!--withdraw cash-->
<html>
<head>
	<title>WITHDRAW MONEY</title>
	<script type='text/javascript' src='IDGen.js'></script>
	<title>Withdrawal Form</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
button 
{
  font-weight: bold;
  width: 08em;
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
  width: 06em;
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
<h2>Please Enter the amount that you wish to Withdraw</h2>
<form method="POST" action="withdrawal_check_current.php">
<label>Withdrawal Amount :</label>
  <input name="amount" type="number" placeholder="Amount" >
  <br>
  <br>
  <button type="submit">Withdraw</button>
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