<?php 
 	session_start();
 	date_default_timezone_set("Asia/Calcutta");
 	$time=date("H:i:s");
	$date=date("Y/m/d");
	$conn=mysqli_connect('localhost','root','','atm');
	$amt=$_POST['amount'];
	$sql="select current_balance from current_account where c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]');";
	$result=mysqli_query($conn,$sql);
	$tid=mysqli_query($conn,"select * from transaction_id");
	$val=mysqli_fetch_assoc($tid);
	if($amt==0)
	{
		echo '<script language="javascript">';
		echo 'alert("Please Enter a valid amount !!");window.location="atm4ac.php"';
		echo '</script>';	
	}
	if($amt%100==0)
	{	
		if (mysqli_num_rows($result)>0) 
		{
			while($row=mysqli_fetch_assoc($result)) 
			{
				if ($row["current_balance"]>=$amt)
		 		{
		 			$trans=$val["t_id"];
		 			++$trans;
		 			$actamt=$row["current_balance"]-$amt;
		 			$sql1="update current_account set current_balance =$actamt WHERE c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]')";
		 			$sql2="insert into transaction values('$date','$time',$trans,'$_SESSION[db_usr]','Current',$amt,$actamt,'Debit')";
		 			$sql3="update transaction_id set t_id=$trans";
		 			mysqli_query($conn,$sql1);
		 			mysqli_query($conn,$sql2);
		 			mysqli_query($conn,$sql3);
		 			echo '<script language="javascript">';
					echo 'alert("Thank you for banking with us!!\n\nYour Transaction Number is "+"'.$trans.'");window.location="index.php"';
					echo '</script>';	
		 		}
		 		else
				{
					echo '<script language="javascript">';
					echo 'alert(" You have Insufficient funds in your account!!");window.location="index.php"';
					echo '</script>';
				}
    		}
		}
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Please Enter the amount in multiples of 100!!");window.location="atm4ac.php"';
		echo '</script>';
	} 
 ?>