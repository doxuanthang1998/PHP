<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
$conn=mysqli_connect("localhost","root","","quanlynhanvien");
$eid=$_GET['eid'];
if($id == 1){
    echo"<script>";
    echo"alert('Bạn không thể xóa nhân viên này !!!'); window.location='admin.php';</script>";
}else{
    $sql = "delete from employee where eid='$eid'";
    mysqli_query($conn,$sql);
    header("location:admin.php");
    exit();
}
