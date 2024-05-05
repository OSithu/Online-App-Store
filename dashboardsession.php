<?php
include("connect.php");
session_start();

if (isset($_SESSION['email']))
{
    
$x=$_SESSION["email"];



   
header("Location:display.php");
        

}

else
{
         

   echo "<script>alert('You are not a Login.Please Login'); window.location.href = 'login.html';</script>";

}

?>