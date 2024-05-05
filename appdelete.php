<?php
include 'connect.php';
if(isset($_GET['deleteappid'])){
    $appid=$_GET['deleteappid'];

    $sql="delete from `app` where appid=$appid";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:appdashboard.php');
    }else{
        die(mysqli_error($con));
    }
}
?>