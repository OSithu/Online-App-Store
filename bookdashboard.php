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

        <section class="entry_section" >

         

          <div class="formcard">

           <!-- <div>
      <button style="position:absolute; z-index:-2;" onclick="document.location='appuplo.php'" class="button button4" >Add Apps</button>
    </div> -->
    <div >
      <div >
        <h2 class="formhead">Upcoming Books</h2>
      </div>
<br>
      <div id="customers">
        <table>
          <tr>
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Book Description</th>
            <th>Author</th>
            <th>Price</th>
            <th>Developer Email</th>
            <th style="width:30%">Operations</th>
            <!-- <th>Remove</th> -->
          </tr>

      


          
   <?php
   session_start();
   if (isset($_SESSION['email']))
 {
   $x=$_SESSION["email"];
 
   
   $sql="Select * from `book` where email='$x'";
$result=mysqli_query($con,$sql);
if($result){   
    while($row=mysqli_fetch_assoc($result)){
        $bookid=$row['bookid'];
        $bookname=$row['bookname'];
        $bookdescription=$row['bookdescription'];
        $author=$row['author'];
        $price=$row['price'];
        $email=$row['email'];
        ?>
    <tr>
        <td> <?php echo $row['bookid']; ?> </td>
        <td> <?php echo $row['bookname']; ?> </td>
        <td> <?php echo $row['bookdescription']; ?> </td>
        <td> <?php echo $row['author']; ?> </td>
        <td> <?php echo $row['price']; ?> </td>
        <td> <?php echo $row['email']; ?> </td>
        <td> <?php
         
         
         echo '<a href="bookupdate.php?
         updatebookid='.$bookid.'"><button  style="color:white; background-color:blue; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 100%; margin-left:10px;  ">Edit</button></a>';
         echo '<a href="bookdelete.php?
         deletebookid='.$bookid.'"><button  style="color:white; background-color:red; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 100%; margin-left:10px;  ">Remove</button></a>';
          
          
      ?> </td>
    </tr>
        
      <?php
    }
    
}
 }

   ?>

        
      

        </table>
      </div>
    </div>


          

        </section>
      
            
          
</body>
</html>