<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
?>
<?php
if(isset($_POST['ok'])){
    if($_POST['txtuser'] == NULL){
        echo"Vui lòng nhập tên thành viên <br />";
    }else{
        $u=$_POST['txtuser'];
    }
    if($_POST['txtde'] == NULL){
        echo"Vui lòng nhập phòng ban <br />";
    }else {
        $de = $_POST['txtde'];
    }
    if ($_POST['txtpo'] == null) {
        echo "Vui lòng nhập chức vụ <br />";
    } else {
        $po = $_POST['txtpo'];
    }
    if ($_POST['txtkk'] == null) {
        echo "Vui lòng nhập hình thức khen thưởng kỉ luật<br />";
    } else {
        $kk = $_POST['txtkk'];
    }
    if ($u && $de && $po && $kk) {
        $conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
        $sql = "select * from ktkl where username='$u' ";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) == 1) {
            echo "Nhân viên này đã được nhập liệu, vui lòng thêm nhân viên khác <br />";
        } else {
            $sql = "insert into ktkl(username,department,position,khenthuongkiluat ) values ('$u','$de','$po','$kk')";
            mysqli_query($conn, $sql);
            header("location:admin.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý nhân sự</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<form action="add_ktkl.php" method="post">
    <div class="row">
        <div class="container" style="width: 50%">
            <h1 style="text-align: center">Thêm khen thưởng, kỉ luật</h1>
            <div class="form-group">
                <label>Tên thành viên</label>
                <input type="text" name="txtuser" class="form-control" placeholder="Nhập vào tên thành viên...">
            </div>
            <div class="form-group">
                <label>Phòng ban</label>
                <input type="text" name="txtde" class="form-control" placeholder="Nhập vào phòng ban...">
            </div>
            <div class="form-group">
                <label>Chức vụ</label>
                <input type="text" name="txtpo" class="form-control" placeholder="Nhập vào chức vụ...">
            </div>
            <div class="form-group">
                <label>Khen thưởng, kỉ luật</label>
                <input type="text" name="txtkk" class="form-control" placeholder="Nhập vào hình thức nào đó...">
            </div>
            <button type="submit" name="ok" class="btn btn-primary">Thêm khen thưởng, kỉ luật</button>
            <button type="reset" name="reset" class="btn btn-danger" style="margin-left: 10px">Nhập lại</button>
        </div>
    </div>
</form>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
</body>
</html>