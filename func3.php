<?php
session_start();
$con=mysqli_connect("sql311.byethost8.com","b8_27314253","JINTU1998","b8_27314253_online_house_rent");
if(isset($_POST['adsub'])){
	$Username=$_POST['Username1'];
	$Password=$_POST['Password2'];
	$query="select * from admin where Username='$Username' and Password='$Password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['Username']=$Username;
		header("Location:dashboard.php");
	}
	else
		// header("Location:error2.php");
		echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index.php';</script>");
}