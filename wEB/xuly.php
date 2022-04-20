<?php
    if(isset($_POST["submit"])){
    $tendangnhap = $_POST["username"];
    $password = $_POST["password"];
    $nlpassword = $_POST["nlpassword"];
    $ho = $_POST["ho"];
    $ten = $_POST["ten"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    
    $tk = substr($tendangnhap,0,1);
    $str = strstr("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",$tk);
    $kt = strlen(strstr($str,$tk));
    if($tendangnhap == ""){
        echo "Tên đăng nhập không được để trống";
        echo "<br>";
    }
    if($password == ""){
        echo "Password không được để trống";
        echo "<br>";
    }
    if($nlpassword == ""){
        echo "Nhập lại password không được để trống";
        echo "<br>";
    }
    if($ho ==""){
        echo "Họ của bạn không được để trống";
        echo "<br>";
    }
    if($ten ==""){
        echo "Tên của bạn không được để trống";
        echo "<br>";
    }
    if($email ==""){
        echo "Email không được để trống";
        echo "<br>";
    }
    if($phone ==""){
        echo "Số điện thoại không được để trống";
        echo "<br>";    
    }
    else if ($_POST["password"] != $_POST["nlpassword"]) {
        echo "Lỗi: Mật khẩu không khóp";
    }
    else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
        echo "Lỗi: Email không hợp lệ";
    }
    else if(strpos($tendangnhap," ",0) || $kt == 0){
        echo "Lỗi: Tên đăng nhập có khoảng trắng, bắt đầu là một ký tự";
    }
    else if(strlen($password) < 8 || strlen($password) > 16){
        echo "Lỗi: Mật khẩu phải có ít nhất 8 ký tự và nhiều nhất là 16 ký tự";
    }
    else if(strlen($phone) != 12){
        echo "Lỗi: Số điện thoại gồm 12 ký số";
    }
    else{
        echo "Đăng ký thành công";
    }
    }
?>