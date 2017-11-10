<script>
		function IDGeneratorwith(min,max)
	{
		var refid=Math.floor(Math.random() * (max - min + 1) + min);
		alert("Withdrawal Successfull your Transaction id is "+refid+"\nThank You for banking with us");

	}
</script>
<?php 
 	session_start();
	$conn=mysqli_connect('localhost','root','','atm');
	$amt=$_POST['amount'];
	$sql="select saving_balance from saving_account where c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]');";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) 
	{
		while($row=mysqli_fetch_assoc($result)) 
		{
		 		$actamt=$row["saving_balance"]+$amt;
		 		$sql1="update saving_account set saving_balance =$actamt WHERE c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]')";
		 		mysqli_query($conn,$sql1);
		 		echo '<script language="javascript">';
				echo 'alert("Thank you for banking with us !!");window.location="index.php"';
				echo '</script>';
    	}
	} 
 ?>