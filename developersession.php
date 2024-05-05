<?php
include("connect.php");
session_start();

if (isset($_SESSION['email']))
{
    
$x=$_SESSION["email"];

 $query = "SELECT email FROM cruds WHERE email='$x' AND type='App Developer';";
  
    $result = $con->query($query);

    if ($result->num_rows > 0) 
    {
      header("Location:deventry.html");
        
    }
    else
{
   echo "<script>alert('You are not a App Developer'); window.location.href = 'home.html';</script>";

}

}

else
{
         

   echo "<script>alert('You are not a Login.Please Login'); window.location.href = 'login.html';</script>";

}

?>