<?php
session_start();
//echo $_SESSION["email"];
if(isset($_SESSION['email']))
{
	session_destroy();
	//echo"Logged out";
	echo "<script>alert('Logget out');window.location.href = 'home.html';</script>";
}
else{
	//echo"hhhh";
		echo "<script>alert('login');window.location.href = 'login.html';</script>";

}

?>