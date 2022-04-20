<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta httq-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css8.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <center><p style = "font-family:courier,arial,helvetica; font-size:50px">Hệ thống quản lý giảng dạy</p></center>
    <center><img src="./logodhct.png" alt=""></center>
    <div class="phom">
    <h1>Đăng nhập</h1>
    <form action="login_submit.php" method="POST">
        <table>
            <div class="textbox clearfix">
            <!-- <tr> -->
                <!-- <td>Username</td> -->
                <i class="fa fa-user"></i>
                <input type="text" name="username" placeholder="Username">
            <!-- </tr> -->
            </div>
            <div class="textbox">
            <!-- <tr> -->
                <!-- <td>Password</td> -->
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            <!-- </tr> -->
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Login</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
            </div>
        </table>
    </form>
</body>
</html>