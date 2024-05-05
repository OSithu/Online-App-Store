<?php 
include 'connect.php';
$feedbackid=$_GET['updatefeedbackid'];
$sql="Select * from `feedback` where feedbackid=$feedbackid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$feedbackid=$row['feedbackid'];
$name=$row['name'];
$email=$row['email'];
$subject=$row['subject'];
$date=$row['date'];
$feedback=$row['feedback'];


if(isset($_POST['submit'])){
  $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $date=$_POST['date'];
    $feedback=$_POST['feedback'];

    $sql="update `feedback` set name='$name',
    email='$email', subject='$subject',
    date='$date',feedback='$feedback' where feedbackid=$feedbackid";
    $result=mysqli_query($con,$sql); 
    if($result)
    {
        header('location:feedbackdashboard.php');
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

          <h1 class="formhead"><b>Dreamers Feedback</b></h1><br>
           
           <div style="font-size: larger;" >
                <form method="post">
        
                <div>
              <label class="formlabel">Name</label>
              <input type="text" class="formfiltext" placeholder="Name" name="name" autocomplete="off" value="<?php echo $name;?>">
          </div>

          <br>

          <div>
              <label class="formlabel">E-mail</label>
              <input type="email" class="formfiltext" name="email" placeholder="Email" value="<?php echo $email;?>">
          </div>

          <br>

          <div>
              <label class="formlabel">Subject</label>
              <input type="text" class="formfiltext" placeholder="Subject" name="subject" autocomplete="off" value="<?php echo $subject;?>">
          </div>

          <br>

          <div>
              <label class="formlabel">Date</label>
              <input type="text" class="formfiltext" placeholder="Date" name="date" autocomplete="off" value="2023-06-27"
              min="2023-01-01" max="2033-12-31" value="<?php echo $date;?>">
          </div>

          <br>

          <div>
              <label class="formlabel">Feedback</label> 
              <textarea class="formfildes" name="feedback" rows="5" value="<?php echo $feedback;?>"></textarea>
          </div>

          <br>
          <br>

          <button type="submit" class="formbutton" name="submit">Update</button>
      </form>
  
          
              </div>
          

        </section>
      
            
          
</body>
</html>