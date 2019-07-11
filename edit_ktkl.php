<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
$kid=$_GET['kid'];
if(isset($_POST['ok'])) {
    if ($_POST['txtuser'] == null) {
        echo "Vui lòng nhập tên thành viên <br />";
    } else {
        $u = $_POST['txtuser'];
    }
    if ($_POST['txtde'] == null) {
        echo "Vui lòng nhập phòng ban <br />";
    } else {
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
        $sql = "select * from quatrinhcongtac where username='u' and kkid != '$kid'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) == 1) {
            echo "Tên nhân viên này đã tồn tại, vui lòng chọn một tên nhân viên khác <br />";
        } else {
            $sql = "update ktkl set username='$u',department='$de',position='$po',khenthuongkiluat = '$kk' where kkid = '$kid'";
            mysqli_query($conn, $sql);
            header("location:admin.php");
            exit();
        }
    }
}
$sql="select * from ktkl where kkid='$kid'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($query);
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
<form action="add_ktkl.php?kid=<?php echo $data['kkid']; ?>"" method="post">
    <div class="row">
        <div class="container" style="width: 50%">
            <h1 style="text-align: center">Thêm khen thưởng, kỉ luật</h1>
            <div class="form-group">
                <label>Tên thành viên</label>
                <input type="text" name="txtuser" class="form-control" value="<?php echo $data['username']; ?>">
            </div>
            <div class="form-group">
                <label>Phòng ban</label>
                <input type="text" name="txtde" class="form-control" value="<?php echo $data['department']; ?>">
            </div>
            <div class="form-group">
                <label>Chức vụ</label>
                <input type="text" name="txtpo" class="form-control" value="<?php echo $data['position']; ?>">
            </div>
            <div class="form-group">
                <label>Khen thưởng, kỉ luật</label>
                <input type="text" name="txtkk" class="form-control" value="<?php echo $data['khenthuongkiluat']; ?>">
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