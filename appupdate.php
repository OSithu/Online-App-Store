<?php 
include 'connect.php';
$appid=$_GET['updateappid'];
$sql="Select * from `app` where appid=$appid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$appid=$row['appid'];
$appname=$row['appname'];
$appdescription=$row['appdescription'];
$appicon=$row['appicon'];
$appimg1=$row['appimg1'];
$appimg2=$row['appimg2'];
$appimg3=$row['appimg3'];
$email=$row['email'];

if(isset($_POST['submit'])){
  $appname=$_POST['appname'];
  $appdescription=$_POST['appdescription'];
  $appicon=$_POST['appicon'];
  $appimg1=$_POST['appimg1'];
  $appimg2=$_POST['appimg2'];
  $appimg3=$_POST['appimg3'];
  $email=$_POST['email'];

    $sql="update `app` set appname='$appname',
    appdescription='$appdescription', appicon='$appicon',
    appimg1='$appimg1', appimg2='$appimg2',appimg3='$appimg3',email='$email' where appid=$appid";
    $result=mysqli_query($con,$sql); 
    if($result)
    {
        header('location:appdashboard.php');
        exit();
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

            <h1 class="formhead"><b>Upload Your Dream App</b></h1><br>
           
             <div style="font-size: larger;" >
                  <form method="post">
          
                      <div >
                          <label class="formlabel">App Name</label>
                          <input type="text" class="formfiltext" placeholder="App Name" name="appname" autocomplete="off" value="<?php  echo $appname;?>">
                      </div>

                      <br>
          
                      <div>
                                  <label class="formlabel">App Description</label>
                                  <textarea class="formfildes" name="appdescription" rows="5" value="<?php  echo $appdescription;?>" ></textarea>
                      </div>
          
                      <br>
          
                      <div >
                           <label class="formlabel">App Icon</label>
                           <input type="file"  name="appicon">
                      </div>
          
                      <br>
          
                      <div >
                           <label  class="formlabel" >App Image 01</label>
                           <input type="file"  name="appimg1">
                      </div>
          
                      <br>
          
                      <div >
                           <label  class="formlabel">App Image 02</label>
                           <input type="file"  name="appimg2">
                      </div>
          
                      <br>
          
                      <div >
                           <label  class="formlabel">App Image 01</label>
                           <input type="file"  name="appimg3">
                      </div>
          
                      <br>
          
                      <div >
                          <label   class="formlabel">E-mail</label>
                          <input type="email" class="formfiltext" name="email" value="<?php  echo $email;?>">
                      </div>
          
                      
                      <br>
          
                      <button type="submit" class="formbutton" name="submit">Update</button>
                  </form>
          
              </div>
          

        </section>
      
            
          
</body>
</html>