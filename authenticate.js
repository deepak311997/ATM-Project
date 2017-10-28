function auth()
{
	var id=document.getElementById("acc_no").value;
	var pin=document.getElementById("atm_pin").value;
	if(id=="admin" && pin==1234)
	{
		alert("Login Successfull");
		window.location="atm3a.php";
	}
	else
	{
		//alert("Invalid Account no or ATM pin !!!");
		window.location="atm2.php";
	}
}