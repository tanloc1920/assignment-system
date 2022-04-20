<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./cau7.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <center><p style = "font-family:courier,arial,helvetica; font-size:50px">Đăng ký tài khoản hệ thống</p></center>
    <div class="phom">
    <form action="xuly.php" method="POST">
        <table>
            <div class="textbox clearfix">
                <i class="fa fa-user"></i>
                <input type="text" name="username" placeholder="Tên đăng nhập(*)">
            </div>
            <div class="textbox">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="Password(*)">
            </div>
            <div class="textbox">
                <i class="fa fa-key"></i>
                <input type="password" name="nlpassword" placeholder="Nhập lại mật khẩu(*)">
            </div>
            <div class="textbox">
                <i class="fa fa-info"></i>
                <input type="text" name="ho" placeholder="Họ của bạn(*)">
            </div>
            <div class= "textbox">
                <i class="fa fa-info"></i>
                <input type="text" name="ten" placeholder="Tên của bạn(*)">
            </div>
            <div class= "textbox">
                <i class="fa fa-envelope"></i>
                <input type="text" name="email" placeholder="Email(*)">
            </div>
            <div class= "textbox">
                <i class="fa fa-phone"></i>
                <input type="number" name="phone" placeholder="Số điện thoại(*)">
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit">Đăng ký</button>
                </td>
                </tr>
            </div>
        </table>
    </form>
</body>
</html>