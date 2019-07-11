<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
?>
<?php
if(isset($_POST['ok'])) {
            if ($_POST['txtemp'] == null) {
                echo "Vui lòng nhập tên nhân viên <br />";
            } else {
                $u = $_POST['txtemp'];
            }
            if ($_POST['txtde'] == null) {
                echo "Vui lòng nhập vào phòng ban <br />";
            } else {
                $de = $_POST['txtde'];
            }
            if ($_POST['txtpo'] == null) {
                echo "Vui lòng nhập chức vụ <br />";
            } else {
                $po = $_POST['txtpo'];
            }
                if ($_POST['gender'] == null) {
                    echo "Vui lòng nhập giới tính <br />";
                } else {
                    $gender = $_POST['gender'];
                }
                if ($_POST['txtidcard'] == null) {
                    echo "Vui lòng nhập số CMND <br />";
                } else {
                    $idcard = $_POST['txtidcard'];
                }
                    if ($_POST['txtadd'] == null) {
                        echo "Vui lòng nhập địa chỉ <br />";
                    } else {
                        $add = $_POST['txtadd'];
                    }
                        if ($_POST['txtsalary'] == null) {
                            echo "Vui lòng nhập mức lương <br />";
                        } else {
                            $salary = $_POST['txtsalary'];
                        }
                        $des=$_POST['txtdes'];

                        if ($u && $de && $po && $gender && $idcard && $add && $salary) {
                            $conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
                            $sql = "select * from employee where username='$u' ";
                            $query = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($query) == 1) {
                                echo "Tài khoản này đã tồn tại, vui lòng chọn một tài khoản khác <br />";
                            } else {
                                $sql = "insert into employee(username,department,position,gender,idcard,address,salary,des ) values ('$u','$de','$po','$gender','$idcard','$add','$salary','$des')";
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
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
<form action="add_employee.php" method="post">
    <div class="row">
        <div class="container" style="width: 50%">
            <h1 style="text-align: center">Thêm nhân viên</h1>
            <div class="form-group">
                <label>Tên nhân viên</label>
                <input type="text" name="txtemp" class="form-control" placeholder="Nhập vào tên nhân viên...">
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
                <label>Giới tính</label>
                <input type="text" name="gender" class="form-control" placeholder="Nhập vào giới tính...">
            </div>
            <div class="form-group">
                <label>CMND</label>
                <input type="text" name="txtidcard" class="form-control" placeholder="Nhập vào số cmnd...">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="txtadd" class="form-control" placeholder="Nhập vào địa chỉ...">
            </div>
            <div class="form-group">
                <label>Mức lương</label>
                <input type="text" name="txtsalary" class="form-control" placeholder="Nhập vào mức lương...">
            </div>
            <div class="form-group">
                <label>Ghi chú</label>
                <textarea name="txtdes" class="form-control"></textarea>
            </div>
            <script type="text/javascript">
                CKEDITOR.replace('txtdes');
            </script>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Ghi nhớ đăng nhập
                </label>
            </div>
            <button type="submit" name="ok" class="btn btn-primary">Thêm nhân viên</button>
            <button type="reset" name="reset" class="btn btn-danger" style="margin-left: 10px">Nhập lại</button>
        </div>
    </div>
</form>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
</body>
</html>