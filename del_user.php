<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
$conn=mysqli_connect("localhost","root","","quanlynhanvien");
$id=$_GET['uid'];
if($id == 1){
    echo"<script>";
    echo"alert('Bạn không thể xóa admin !!!'); window.location='admin.php';";
    echo"</script>";
}else{
    $sql = "delete from user where userid='$id'";
    mysqli_query($conn,$sql);
    header("location:admin.php");
    exit();
}
