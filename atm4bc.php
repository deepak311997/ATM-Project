<!--deposit cash-->
<!DOCTYPE html>
<html>
<head>
	<title>DEPOSIT MONEY</title>
	<script type='text/javascript' src='IDGen.js'></script>
	<title>Deposit Form</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
input[type=submit]
{
	background-color:gray;
	width: 20%;
	color: white
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
<form action="deposit_check_current.php">
<label>Deposit Amount :</label>
  <input name="amount" value="amount" type="number" placeholder="Amount" >
  <br>
  <br>
  <button type="submit" value="Deposit">Deposit</button>
  <br>
  <br>
 </form> 
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>