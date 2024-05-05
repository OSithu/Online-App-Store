<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    
    $moviename=$_POST['moviename'];
    $moviedescription=$_POST['moviedescription'];
    $imdb=$_POST['imdb'];
    $movieimg=$_POST['movieimg'];
    $email=$_POST['email'];

    $sql="insert into `movie` (moviename,moviedescription,imdb,movieimg,email)
    values ('$moviename','$moviedescription','$imdb','$movieimg','$email')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('Your Dream Movie Enter to the Upcoming  List '); window.location.href = 'moviedashboard.php';</script>";
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
        <title>Movie Upload</title>
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

            <h1 class="formhead"><b>Upload Your Dream Movie</b></h1><br>
           
             <div style="font-size: larger;" >
                  <form method="post">
          
                  <div>
                <label class="formlabel">Movie Name</label>
                <input type="text" class="formfiltext" placeholder="Movie Name" name="moviename" autocomplete="off">
            </div>

            <br>

            <div>
                <label class="formlabel">Movie Description</label>
                <textarea class="formfildes" name="moviedescription" rows="5" placeholder="Movie Description"></textarea>
            </div>

            <br>

            <div>
                <label class="formlabel">Imdb</label>
                <input type="text" class="formfiltext" placeholder="Imdb" name="imdb" autocomplete="off">
            </div>
            <br>

            <div>
                <label class="formlabel" >Movie Image</label>
                <input type="file" name="movieimg">
            </div>

            

            <br>

            <div>
                <label class="formlabel">E-mail</label>
                <input type="email" class="formfiltext" name="email" placeholder="Email">
            </div>

            <br>

            <button type="submit" class="formbutton" name="submit">Upload</button>
                  </form>
          
              </div>
          

        </section>
      
            
          
</body>
</html>