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
<form class="form-horizontal" action="login.php" method="post">
    <div class="row">
        <div class="container" style="width: 50%">
            <h1 style="text-align: center">Quản Lý Nhân Sự</h1>
            <form>
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" class="form-control" name="txtuser"  placeholder="Nhập vào tên đăng nhập của bạn...">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                    <input type="password" class="form-control" name="txtpass" placeholder="Nhập vào mật khẩu của bạn...">
            </div>
            <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Ghi nhớ đăng nhập
                        </label>
                    </div>
            </div>
                <button type="submit" class="btn btn-primary" name="ok" value="Login">Đăng nhập</button>
            </form>
            </div>
        </div>
</form>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
</body>
</html>
<?php
session_start();
$u='';
if(isset($_POST['ok'])){
	if($_POST['txtuser'] == NULL){
		echo "<b style='margin-left: 300px'>Vui lòng nhập tên truy cập của bạn</b><br />";
	}else{
		$u=$_POST['txtuser'];
	}
	if($_POST['txtpass'] == NULL){
		echo "<b style='margin-left: 300px'>Vui lòng nhập mật khẩu của bạn</b> <br />";
	}else{
		$p=$_POST['txtpass'];
	}
	if($u && $p){
	    $conn = mysqli_connect("localhost","root","","quanlynhanvien");
	    $sql="select * from user where username='$u' and password='$p'";
		$query=mysqli_query($conn,$sql);
		if(mysqli_num_rows($query) == 0){
			echo "<b style='margin-left: 300px'>Tên truy cập và mật khẩu không chính xác, vui lòng thử lại.</b>";
		}else{
			$data=mysqli_fetch_assoc($query);
			$_SESSION['ses_username']=$data['username'];
			$_SESSION['ses_level']=$data['level'];
			$_SESSION['ses_userid']=$data['userid'];
			header("location:admin.php");
			exit();
		}
	}
}
?>

