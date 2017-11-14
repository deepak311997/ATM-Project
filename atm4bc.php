<!--deposit cash-->
<html>
<head>
	<title>DEPOSIT MONEY</title>
	<script type='text/javascript' src='IDGen.js'></script>
    <title>Deposit Form</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
button 
{
  width: 09em;
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
<h2>Please Enter the Amount that you wish to deposit</h2>
<form method="POST" action="deposit_check_current.php">
<label>Deposit Amount :</label>
  <input name="amount" value="amount" type="number" placeholder="Amount" >
  <br>
  <br>
  <button type="submit" value="Deposit">Deposit</button>
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