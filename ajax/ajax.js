//JavaScript Document
function create_obj() {
    td=navigator.appName;
    if(td =="Microsoft Internet Explorer"){
        obj=new ActiveXObject("Microsoft.XMLHTTP");
    }else {
        obj=new XMLHttpRequest();
    }
    return obj;
}

var http=create_obj();

function comment() {
    n=encodeURI(document.getElementById('txtname').value);
    e=encodeURI(document.getElementById('txtemail').value);
    m=encodeURI(document.getElementById('txtmess').value);
    http.open("post","check.php",true);
    http.setRequestHeader("Content-type","application/x-www-form-urlencoded;charset=UTF-8");
    http.onreadystatechange=process;
    http.send("name="+n+"&email="+e+"&mess="+m);
}
function loadcmt() {
    http.open("get","check.php?data=all",true);
    http.onreadystatechange=process2;
    http.send(null);
}

function process2() {
    if(http.readyState==4 && http.status==200){
        kq2=http.responseText;
        document.getElementById("comment").innerHTML=kq2;
    }
}
function process() {
    if(http.readyState == 4 && http.status == 200){
        kq=http.responseText;
        if(kq == 1){
            document.getElementById("ketqua").innerHTML="Vui lòng nhập đầy đủ thông tin";
        }else {
            document.getElementById("ketqua").innerHTML=kq;
            loadcmt();
            document.getElementById("txtmess").value="none";
        }
    }
}
