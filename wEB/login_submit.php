<?php
    session_start();
    include 'config.php';
    if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] !=''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = $password;
        $sql = "SELECT * FROM user WHERE username='$username' AND password = '$password' ";
        $user = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($user);
        if( mysqli_num_rows($user) > 0){
            $_SESSION["username"] = $data['hoten'];
            if($data['level'] == 1){
                $_SESSION["username"] = $data['hoten'];
                header("location:admin.php");
            }else if($data['level'] == 3){
                $_SESSION["username"] = $data['hoten'];
                header("location: Trangchu.php");
            }else{
                header("location: sinhvien.php");
            }
        //     header("location: Trangchu.php");
        }else{
            header("location: loginfail1.php");
        } 
    }else{
        header("location: login.php");
    }
?>