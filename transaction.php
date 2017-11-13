<?php session_start()?>
<html>
<head>
	<title>Mini-Statement</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
#tab {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    text-align: center;
    margin:auto;
    margin-top:20px;
}

#tab td, #tab th {
    border: 1px solid #ddd;
    padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}

#tab th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: red;
    color: white;
}
#abc
{
	color: black;
	 margin-left:570px;
}
</style>
</head>
<body>
<div align="center">
<img src="mylogo.png" alt="State Bank of India"></div>
<?php
$conn=mysqli_connect('localhost','root','','atm');
$sql="select * from transaction where acc_no='$_SESSION[db_usr]' order by time DESC";
$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) 
		{
			$i=0;
			echo "<div align='center'><h3><i>Your Last 8 Transactions are given below </i></h3></div>";
			echo "<table id=tab>
			<tr>
				<th>Date</th>
				<th>Time</th>
				<th>Transaction Number</th>
				<th>Account Number</th>
				<th>Account Type</th>
				<th>Amount</th>
				<th>Balance</th>
				<th>Transaction Type</th>
			</tr>";
			while($row=mysqli_fetch_assoc($result)) 
			{
				if($i<8)
				{	
				echo "<tr>
						<td>".$row["date"]."</td>
						<td>".$row["time"]."</td>
						<td>".$row["t_id"]."</td>
						<td>".$row["acc_no"]."</td>
						<td>".$row["account_type"]."</td>
						<td>".$row["t_amount"]."</td>
						<td>".$row["t_balance"]."</td>
						<td>".$row["t_type"]."</td>
					</tr>";
					$i++;
				}
			}
			echo "</table>"."<br>";
			echo "<form action='index.php'>
				<button id= 'abc' type='submit' style='width: 13em; height: 2em;'>Click here to go back</button>
				</form>";
		}
		else
		{
			echo "<div align='center' style='margin-top:110px;'><h2><i>There are No Recent Transactions !!</i></h2></div>";
			echo "<form action='index.php'>
				<button id= 'abc' type='submit' style='width: 13em; height: 2em;'>Click here to go back</button>
					</form>";
		}
?>
</body>
<footer><b>Copyrights &copy; Students Bank Public Limited 2018</b></footer>
</html>