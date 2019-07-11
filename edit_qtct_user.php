<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
$qid=$_GET['qid'];
if(isset($_POST['ok'])){
    if($_POST['txtemp'] == NULL){
        echo"Vui lòng nhập tên nhân viên <br />";
    }else{
        $emp=$_POST['txtemp'];
    }
    if($_POST['txtunit'] == NULL){
        echo"Vui lòng nhập tên đơn vị công tác <br />";
    }else{
        $unit=$_POST['txtunit'];
    }
    if($_POST['txtde'] == NULL){
        echo"Vui lòng nhập tên phòng ban <br />";
    }else{
        $de=$_POST['txtde'];
    }
    if($_POST['txtpo'] == NULL){
        echo"Vui lòng nhập tên phòng ban <br />";
    }else{
        $po=$_POST['txtpo'];
    }
    if($_POST['txtsd'] == NULL){
        echo"Vui lòng nhập ngày bắt đầu công tác <br />";
    }else{
        $sd=$_POST['txtsd'];
    }
    if($_POST['txted'] == NULL){
        echo"Vui lòng nhập ngày kết thúc công tác <br />";
    }else{
        $ed=$_POST['txted'];
    }
    if ($emp && $unit && $de && $po && $sd && $ed) {
        $sql = "select * from quatrinhcongtac where username='$emp' and qid != '$qid'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) == 1) {
            echo "Tên nhân viên này đã tồn tại, vui lòng chọn một tên nhân viên khác <br />";
        } else {
            $sql = "update quatrinhcongtac set username='$emp',unit='$unit',department='$de',position ='$po',startdate='$sd',enddate='$ed' where qid = '$qid'";
            mysqli_query($conn, $sql);
            header("location:admin.php");
            exit();
        }
    }
}
$sql="select * from quatrinhcongtac where qid='$qid'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($query);
?>

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
<form action="edit_qtct_user.php?qid=<?php echo $data['qid']; ?>" method="post">
    <div class="row">
        <div class="container" style="width: 50%">
            <h1 style="text-align: center">Thêm quá trình công tác</h1>
            <div class="form-group">
                <label>Tên nhân viên</label>
                <input type="text" name="txtemp" class="form-control" value="<?php echo $data['username']; ?>">
            </div>
            <div class="form-group">
                <label>Đơn vị công tác</label>
                <input type="text" name="txtunit" class="form-control" value="<?php echo $data['unit']; ?>">
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
                <label>Ngày bắt đầu</label>
                <input type="text" name="txtsd" class="form-control" value="<?php echo $data['startdate']; ?>">
            </div>
            <div class="form-group">
                <label>Ngày kết thúc</label>
                <input type="text" name="txted" class="form-control" value="<?php echo $data['enddate']; ?>">
            </div>
            <button type="submit" name="ok" class="btn btn-primary">Sửa quá trình công tác</button>
            <button type="reset" name="reset" class="btn btn-danger" style="margin-left: 10px">Nhập lại</button>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
</body>
</html>
