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
<form action="withdrawal_check.php" method="POST">
<label>Withdrawal Amount :</label>
  <input name="amount" type="number" placeholder="Amount" >
  <br>
  <br>
  <button type="submit">Withdraw</button>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>