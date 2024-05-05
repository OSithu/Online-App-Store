<?php
include 'connect.php';
if(isset($_GET['deletefeedbackid'])){
    $feedbackid=$_GET['deletefeedbackid'];

    $sql="delete from `feedback` where feedbackid=$feedbackid";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:feedbackdashboard.php');
    }else{
        die(mysqli_error($con));
    }
}
?>