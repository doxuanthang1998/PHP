<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
$conn=mysqli_connect("localhost","root","","quanlynhanvien");
$qid=$_GET['qid'];
if($qid == 1){
    echo"<script>";
    echo"alert('Bạn không thể xóa thành viên này !!!'); window.location='admin.php';</script>";
}else{
    $sql = "delete from quatrinhcongtac where qid='$qid'";
    mysqli_query($conn,$sql);
    header("location:admin.php");
    exit();
}
