<?php
session_start();
include("connect.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT email, Password FROM `cruds` WHERE email='$email' AND password='$password'";
  
    $result = $con->query($query);

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc())
       {            
                    //$_SESSION["First_Name"] = $row["First_Name"];
                   $_SESSION["email"] = $row["email"];

                   header("Location: home.html");
                   //die;
       } 
        
    }
    else
{
    
        echo "<script>alert('Wrong Username or Password'); window.location.href = 'login.html';</script>";

}
}

//session_write_close();
?>

