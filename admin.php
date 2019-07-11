<?php
session_start();
if($_SESSION['ses_level'] != 2){
    header("location:login.php");
    exit();
}
?>

<script language="JavaScript">
    function kiemtra() {
        if(!window.confirm('Bạn có muốn xóa thành viên này không ?')){
            return false;
        }
    }
</script>

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
<body data-spy="scroll" data-target="#nav-test">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin.php">Phần mềm quản lý nhân sự</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#quantri">Quản trị<span class="sr-only">(current)</span></a></li>
                <li><a href="#nhansu">Nhân sự</a></li>
                <li><a href="#congtac">Quá trình công tác</a></li>
                <li><a href="#khenthuong">Khen thưởng kỉ luật</a></li>
                <li><a href="#danhgia">Đánh giá</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out
" ></span>Đăng xuất</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron qh-jumbotron">
    <div class="container">
        <h1>Quản trị nhân sự</h1>
        <p>Xây dựng hệ thống tương lai</p>
        <div>
            <button class="btn btn-danger" data-container="body" data-toggle="popover" data-placement="bottom"
                    data-content="Đang tải...ok rồi!">Xem thêm</button>
            <button class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top"
                    data-content="Chờ một chút...">Chờ chút...</button>
        </div>
    </div>
</div>
<div class="container">
    <!--side-right-->
    <div class="col-md-2 col-md-push-10">
        <div class="panel panel-default">
            <div class="panel-heading">ADMIN<a href="#menu" class="btn btn-link" data-toggle="collapse"
                                               data-target="#menu"><span class="glyphicon glyphicon-plus btn-collapse"></span></a></div>
            <div class="panel-body collapse in" id="menu">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#quantri">Quản trị hệ thống</a> </li>
                    <li><a href="#nhansu">Hồ sơ nhân sự</a> </li>
                    <li><a href="#congtac">Quá trình công tác</a> </li>
                    <li><a href="#khenthuong">Khen thưởng kỉ luật</a> </li>
                    <li><a href="#danhgia">Đánh giá</a> </li>
                </ul>
            </div>
        </div>
        <div id="nav-test" data-spy="affix" class="visible-md visible-lg">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#quantri" >Quản trị</a> </li>
                <li><a href="#nhansu">Nhân sự</a> </li>
                <li><a href="#congtac">Quá trình công tác</a> </li>
                <li><a href="#khenthuong">Khen thưởng/Kỉ luật</a> </li>
                <li><a href="#danhgia">Đánh giá</a> </li>
            </ul>
        </div>
    </div>
    <!--end-sideright-->
    <div class="col-md-10 col-md-pull-2">
        <div id="slideshow" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#Slideshow" data-slide-to="0" class="active"></li>
                <li data-target="#Slideshow" data-slide-to="1"></li>
                <li data-target="#Slideshow" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slide-1.jpg">
                    <div class="carousel-caption">
                        <p style="font-weight: bold">Xây dựng hệ thống vững mạnh</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide-2.jpg">
                    <div class="carousel-caption">
                        <p style="font-weight: bold">Công nghệ số làm mục tiêu phát triển</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide-4.jpg">
                    <div class="carousel-caption">
                        <p style="font-weight: bold">Đoàn kết, kỉ luật, cố gắng</p>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--Quản trị-->
        <div class="page-header" id="quantri" style="text-align: center"><h2>Quản trị hệ thống</h2></div>
        <a href="add_user.php"><button class="btn btn-primary" style="margin-bottom: 10px">Thêm thành
                viên</button></a>
        <table class="table table-striped" style="border-bottom: 1px solid silver">
            <tr>
                <td class="title">STT</td>
                <td class="title">Tên đăng nhập</td>
                <td class="title">Phân quyền</td>
                <td class="title">Phòng ban</td>
                <td class="title">Chức vụ</td>
                <td class="title">Sửa</td>
                <td class="title">Xóa</td>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
            $sql = "select * from user order by userid DESC ";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) == 0) {
                echo "<tr>";
                echo "<td colspan='7'>Không có dữ liệu</td>";
                echo "</tr>";
            } else {
                $stt = 0;
                while ($data = mysqli_fetch_assoc($query)) {
                    $stt++;
                    echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>$data[username]</td>";
                    if ($data['level'] == 1) {
                        echo "<td>Thành viên</td>";
                    } elseif ($data['level'] == 2) {
                        echo "<td><font color='red'>Quản trị viên</font></td>";
                    }
                    echo"<td>$data[department]</td>";
                    echo"<td>$data[position]</td>";
                    echo "<td><a href='edit_user.php?uid=$data[userid];'><button type=\"button\" class=\"btn btn-primary\">Sửa</button></a></td>";
                    echo "<td><a href='del_user.php?uid=$data[userid];' onclick='return kiemtra();'><button type=\"button\" class=\"btn btn-danger\">Xóa</button></a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>

        <!--Nhân viên-->
        <div class="page-header" id="nhansu" style="text-align: center"><h2>Hồ sơ nhân sự</h2></div>
        <a href="add_employee.php"><button class="btn btn-primary" style="margin-bottom: 10px">Thêm nhân
                viên</button></a>
            <table class="table table-striped" style="border-bottom: 1px solid silver">
            <tr>
                <td class="title">STT</td>
                <td class="title">Tên nhân viên</td>
                <td class="title">Phòng ban</td>
                <td class="title">Chức vụ</td>
                <td class="title">Giới tính</td>
                <td class="title">CMND</td>
                <td class="title">Địa chỉ</td>
                <td class="title">Mức lương</td>
                <td class="title">Ghi chú</td>
                <td class="title">Sửa</td>
                <td class="title">Xóa</td>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
            $sql = "select * from employee order by eid DESC ";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) == 0) {
                echo "<tr>";
                echo "<td colspan='11' style='text-align: center'>Không có dữ liệu</td>";
                echo "</tr>";
            } else {
                $stt = 0;
                while ($data = mysqli_fetch_assoc($query)) {
                    $stt++;
                    echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>$data[username]</td>";
                    echo"<td>$data[department]</td>";
                    echo"<td>$data[position]</td>";
                    echo "<td>$data[gender]</td>";
                    echo "<td>$data[idcard]</td>";
                    echo "<td>$data[address]</td>";
                    echo "<td>$data[salary]</td>";
                    echo "<td>$data[des]</td>";
                    echo "<td><a href='edit_employee.php?eid=$data[eid];'><button type=\"button\" class=\"btn btn-primary\">Sửa</button></a></td>";
                    echo "<td><a href='del_employee.php?eid=$data[eid];' onclick='return kiemtra();'><button type=\"button\" class=\"btn btn-danger\">Xóa</button></a></td>";
                    echo "</tr>";
                }
            }
            ?>
            </table>

        <!--Quá trình công tác-->
        <div class="page-header" id="congtac" style="text-align: center"><h2>Quá trình công tác</h2></div>
            <a href="add_qtct_user.php"><button class="btn btn-primary" style="margin-bottom: 10px">Thêm
                    quá trình công tác</button></a>
        <table class="table table-striped" style="border-bottom: 1px solid silver">
            <tr>
                <td class="title">STT</td>
                <td class="title">Tên nhân viên</td>
                <td class="title">Đơn vị công tác</td>
                <td class="title">Phòng ban</td>
                <td class="title">Chức vụ</td>
                <td class="title">Ngày bắt đầu</td>
                <td class="title">Ngày kết thúc</td>
                <td class="title">Sửa</td>
                <td class="title">Xóa</td>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
            $sql = "select * from quatrinhcongtac order by qid DESC ";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) == 0) {
                echo "<tr>";
                echo "<td colspan='9' style='text-align: center;'>Không có dữ liệu</td>";
                echo "</tr>";
            } else {
                $stt = 0;
                while ($data = mysqli_fetch_assoc($query)) {
                    $stt++;
                    echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>$data[username]</td>";
                    echo "<td>$data[unit]</td>";
                    echo "<td>$data[department]</td>";
                    echo "<td>$data[position]</td>";
                    echo "<td>$data[startdate]</td>";
                    echo "<td>$data[enddate]</td>";
                    echo "<td><a href='edit_qtct_user.php?qid=$data[qid];'><button type=\"button\" class=\"btn btn-primary\">Sửa</button></a></td>";
                    echo "<td><a href='del_qtct_user.php?qid=$data[qid];' onclick='return kiemtra();'><button type=\"button\" class=\"btn btn-danger\">Xóa</button></a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>

        <!--Khen thưởng, kỉ luật-->
        <div class="page-header" id="khenthuong" style="text-align: center"><h2>Khen thưởng, kỉ luật</h2></div>
        <a href="add_ktkl.php"><button class="btn btn-primary" style="margin-bottom: 10px">Nhập liệu</button></a>
        <table class="table table-striped" style="border-bottom: 1px solid silver">
            <tr>
                <td class="title">STT</td>
                <td class="title">Tên thành viên</td>
                <td class="title">Phòng ban</td>
                <td class="title">Chức vụ</td>
                <td class="title">Khen thưởng, kỉ luật</td>
                <td class="title">Sửa</td>
                <td class="title">Xóa</td>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "quanlynhanvien");
            $sql = "select * from ktkl order by kkid DESC ";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) == 0) {
                echo "<tr>";
                echo "<td colspan='7' style='text-align: center'>Không có dữ liệu</td>";
                echo "</tr>";
            } else {
                $stt = 0;
                while ($data = mysqli_fetch_assoc($query)) {
                    $stt++;
                    echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>$data[username]</td>";
                    echo"<td>$data[department]</td>";
                    echo"<td>$data[position]</td>";
                    echo"<td>$data[khenthuongkiluat]</td>";
                    echo "<td><a href='edit_ktkl.php?kid=$data[kkid];'><button type=\"button\" class=\"btn btn-primary\">Sửa</button></a></td>";
                    echo "<td><a href='del_ktkl.php?kid=$data[kkid];' onclick='return kiemtra();'><button type=\"button\" class=\"btn btn-danger\">Xóa</button></a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>

        <!--Đánh giá-->
        <div class="page-header" id="danhgia" style="text-align: center"><h2>Đánh giá</h2></div>
        <div style="text-align: center"> <a href="../Ajax/bai03/comment.php"><button class="btn btn-primary" style="margin-bottom: 10px">Xem và đánh giá website</button></a><div>
    </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
</body>
</html>

