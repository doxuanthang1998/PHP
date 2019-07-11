<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
$conn=mysqli_connect("localhost","root","","quanlynhanvien");
$kid=$_GET['kid'];
    $sql = "delete from ktkl where kkid='$kid'";
    mysqli_query($conn,$sql);
    header("location:admin.php");
    exit();
