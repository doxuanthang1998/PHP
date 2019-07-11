<?php
$conn=mysqli_connect("localhost","root","","ajaxdemo");
if(isset($_GET['data'])){
    $sql="select * from comment order by com_id asc ";
    $query=mysqli_query($conn,$sql);
    while ($data=mysqli_fetch_assoc($query)){
        echo"<div class='com'><b><p>$data[com_name] - $data[com_email]</p>
                <p>$data[com_mess]</p></b></div>";
    }
}else{
$n=$_POST['name'];
$e=$_POST['email'];
$m=$_POST['mess'];
if($n !="" && $e != "" && $m != ""){
    $sql="insert into comment(com_name,com_email,com_mess,com_date) values('$n','$e','$m',now()) ";
    mysqli_query($conn,$sql);
    echo"<h4>Ý kiến của bạn đã được gửi</h4>";
}else{
    echo"1";
    }
}
