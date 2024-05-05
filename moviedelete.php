<?php
include 'connect.php';
if(isset($_GET['deletemovieid'])){
    $movieid=$_GET['deletemovieid'];

    $sql="delete from `movie` where movieid=$movieid";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:moviedashboard.php');
    }else{
        die(mysqli_error($con));
    }
}
?>