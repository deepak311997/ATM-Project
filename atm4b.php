<!deposit cash>
<!DOCTYPE html>
<html>
<head>
	<script type='text/javascript' src='IDGen.js'></script>
	<title>Deposit Form</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
input[type=submit]
{
	background-color:gray;
	width: 20%;
	color: white
}
</style>	
</head>
<body>
<div align="center">
<img src="logo.png" alt="State Bank of India" width=800px height=150px>
<br>
<br>
<form class="box" action="atm1.php">
<label>Deposit Amount :</label>
  <input id="amount" type="number" placeholder="Amount" >
  <br>
  <br>
  <input type="submit" value="Deposit" onclick="IDGeneratordep(100000,999999)">
  <br>
  <br>
 </form> 
</body>
<footer><b>Copyrights &copy; State Bank of India 2018</b></footer>
</html>