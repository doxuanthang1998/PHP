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
        echo"Vui lòng nhập tên truy cập của bạn <br />";
    }else{
        $u=$_POST['txtuser'];
    }
    if($_POST['txtpass'] == NULL){
        echo"Vui lòng nhập mật khẩu của bạn <br />";
    }else{
        if($_POST['txtpass'] != $_POST['txtpass2']){
            echo"Mật khẩu và xác nhận mật khẩu của bạn không chính xác <br />";
        }else{
            $p=$_POST['txtpass'];
        }
    }
    $l=$_POST['level'];
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
            if ($u && $p && $l && $de && $po) {
                $conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
                $sql = "select * from user where username='$u' ";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) == 1) {
                    echo "Tài khoản này đã tồn tại, vui lòng chọn một tài khoản khác <br />";
                } else {
                    $sql = "insert into user(username,password,level,department,position ) values ('$u','$p','$l','$de','$po')";
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
<form action="add_user.php" method="post">
    <div class="row">
        <div class="container" style="width: 50%">
            <h1 style="text-align: center">Thêm thành viên</h1>
                <div class="form-group">
                    <label>Tên đăng nhập</label>
                    <input type="text" name="txtuser" class="form-control" placeholder="Nhập vào tên đăng nhập...">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="txtpass" class="form-control" placeholder="Nhập vào mật khẩu...">
                </div>
                <div class="form-group">
                    <label>Xác nhận mật khẩu</label>
                    <input type="password" name="txtpass2" class="form-control" placeholder="Nhập lại mật khẩu...">
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
                    <label>Phân quyền</label><br />
                    <select name="level">
                        <option value="1">Thành viên</option>
                        <option value="2">Quản trị viên</option>
                    </select>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Ghi nhớ đăng nhập
                    </label>
                </div>
                <button type="submit" name="ok" class="btn btn-primary">Thêm thành viên</button>
                <button type="reset" name="reset" class="btn btn-danger" style="margin-left: 10px">Nhập lại</button>
        </div>
        </div>
</form>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
</body>
</html>