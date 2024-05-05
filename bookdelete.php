<?php
include 'connect.php';
if(isset($_GET['deletebookid'])){
    $bookid=$_GET['deletebookid'];

    $sql="delete from `book` where bookid=$bookid";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:bookdashboard.php');
    }else{
        die(mysqli_error($con));
    }
}
?>