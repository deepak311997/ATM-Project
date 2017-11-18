<?php
$conn=mysqli_connect('localhost','root','','atm');
$b_id=$_POST['bid'];
$acc=$_POST['acc'];
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$addr=$_POST['address'];
$ph_no=$_POST['phno'];
$p1=$_POST['pass1'];
$p2=$_POST['pass2'];
//$usr_check="select acc_no from account_details where acc_no='$acc';";
//$result=mysqli_query($conn,$usr_check);
/*if(mysqli_num_rows($result)>0)
{
	echo '<script language="javascript">';
	echo 'alert("Account Number already exists please try another !!");window.location="index.php"';
	echo '</script>';
}*/
if($p1!=$p2)
{
	echo '<script language="javascript">';
	echo 'alert("Password Mismatch !!")';
	echo '</script>';
	header('Location:signupintodb.php');
}
else
{
	$c_id=mysqli_query($conn,"select * from cus_id");
	$row=mysqli_fetch_assoc($c_id);
	$val=$row['cid'];
	$sql1="insert into customer values($val,$b_id,'$f_name','$l_name','$addr',$ph_no);";
	$sql2="insert into account_details values($val,'$acc',$p2);";
	$sql3="insert into current_account values($val,0);";
	$sql4="insert into saving_account values($val,0);";
	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);
	mysqli_query($conn,$sql3);
	mysqli_query($conn,$sql4);
	++$val;
	mysqli_query($conn,"update cus_id set cid='$val';");
	echo '<script language="javascript">';
	echo 'alert("Successfuly Signed Up !!");window.location="index.php"';
	echo '</script>';
}
?>