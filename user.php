<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $type=$_POST['type'];

    $sql="insert into cruds (fname,lname,email,mobile,password,type) values ('$fname','$lname','$email','$mobile','$password','$type')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header("location:home.html");
    } else {
        
        die(mysqli_error($con));
    }
}

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

        <section class="entry_section" >

         

        <div class="formcard">
    <h1 class="formhead"><b>Create Account</b></h1><br>
        <form method="POST">

            <div >
                <label class="formlabel">First Name</label> &nbsp&nbsp  
                <input type="text"  class="formfiltext" placeholder="First Name" name="fname" autocomplete="off">
            </div>

            <br>

            <div >
                <label class="formlabel">Last Name</label> &nbsp&nbsp 
                <input type="text"  class="formfiltext" placeholder="Last Name" name="lname" autocomplete="off">
            </div>

            <br>

            <div >
                <label  class="formlabel">E-mail</label> &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp 
                <input type="email"  class="formfiltext" placeholder="E-mail" name="email" autocomplete="off">
            </div>

            <br>

            <div >
                <label class="formlabel">Mobile Number</label>
                <input type="text"  class="formfiltext" placeholder="Enter your mobile" name="mobile"
                    autocomplete="off">
            </div>

            <br>

            <div>
                <label class="formlabel">Password</label> &nbsp&nbsp &nbsp 
                <input type="text" class="formfiltext" placeholder="Enter your password" name="password"
                    autocomplete="off">
            </div>

            <br>


            <div>
                                <label class="formlabel">Account Type</label> 
                                &nbsp&nbsp
                                <input type="radio"  name="type" value="User"  /> User
                                <input type="radio" name="type" value="App Developer" /> App Developer
                            </div>

            <button type="submit" class="formbutton" name="submit">Submit</button>
        </form>

    </div>
          

        </section>
      
            
          
</body>
</html>