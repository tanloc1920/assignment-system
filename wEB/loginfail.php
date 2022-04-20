<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta httq-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
    <style>
        .phom{
            margin: 20px;
            border: 1px solid black;
            grid-column: 5/9;
            width: 300px;
            height: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 10px;
            background-color: #e6c05d;
        }
        p{
            color: red;
        }
    </style>
</head>
<body>
    <div class="phom">
    <h1>Đăng nhập</h1>
    <form action="login_submit.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Login</button>
                    <button type="reset">Reset</button>
                    <p>Đăng nhập thất bại. Xin mời nhập lại.</p>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>