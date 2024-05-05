<?php 
include 'connect.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>App Upload</title>
        <link rel = "stylesheet" href="style.css"  >
        <link rel = "stylesheet" href="deventrystyle.css"  >
        <link rel = "stylesheet" href="tablestyle.css"  >
        <style>

.logouticon{
  margin-left: 79%;
  margin-top: 20px;
  position: absolute;
  font-size: x-large;
}

        </style>
        
        

    </head>
<body>
        <div class  =  "header">

          
        <div><a href="login.html"><button class="button1 button2"><b>Login</b></button></a>
                <a href="user.php">   <button class="button1 button4"><b>Sign Up</b></button></div></a>
            
                <div class="logouticon">
                  <a href="logout.php"><i class ="fa fa-sign-out"></i></a>
                </div>
              

            <div class ="usericon">
              <a href="dashboardsession.php"><i class ="fa fa-user-circle"></i></a>
            </div>

            <img src="image/logo.png" class="logo"> 
            <h6 class="head1">Dream<br>App Store</h6>

            <input class="searchinput" type="text" placeholder="Search Apps, Games, Movie and more">
            <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
            
            
         </div>

         <hr style="border: 1px solid #292727;">


         <div class="icon-bar">
            <a class="active" href="home.html"><i class="fa fa-home"></i></a> 
            <a href="apppage.html"><i class="fa fa-font"></i></a> 
            <a href="bookpage.html"><i class="fa fa-book"></i></a> 
            <a href="moviepage.html"><i class="fa fa-film"></i></a>
            <a href="developersession.php"><i class="fa fa-tasks"></i></a> 
            <a href="feedbackupload.php"><i class="fa fa-ellipsis-h"></i></a> 
        </div>

        <section class="home_section" >

         

          <div class="formcard">

           <!-- <div>
      <button style="position:absolute; z-index:-2;" onclick="document.location='appuplo.php'" class="button button4" >Add Apps</button>
    </div> -->
    <div >
      <div >
        <h2 class="formhead">Users Details</h2>
      </div>
<br>
<div id="customers">

<table>
  <thead>
    <tr>
      <th >ID</th>
      <th >First Name</th>
      <th >Last Name</th>
      <th >E-Mali</th>
      <th >Mobile Number</th>
      <th >Password</th>
      <th >Account Type</th>
      <th >Operation</th>

    </tr>
  </thead>
  <tbody>

  <?php
  session_start();
  if (isset($_SESSION['email']))
{
  $x=$_SESSION["email"];

    $sql="Select * from `cruds` where email='$x' ";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            $type=$row['type'];
            echo'<tr>
            <th >'.$id.'</th>
            <td>'.$fname.'</td>
            <td>'.$lname.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>'.$type.'</td>
            <td>
        <button style="color:white; background-color:green; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 80%; margin-left:10px;  "><a href="update.php? updateid='.$id.'"style="text-decoration:none" >Edit Details</a></button>
        <button style="color:white; background-color:Red; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 80%; margin-left:10px;  " ><a href="delete.php? deleteid='.$id.'" style="text-decoration:none">Delete Account</a></button>
            </td>
           
            </tr>';
        }
          
    } 
  }




?>


  </tbody>
</table>
</div>



          

        </section>
      
            
          
</body>
</html>