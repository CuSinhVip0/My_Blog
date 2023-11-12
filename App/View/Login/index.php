<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in with My-Blog</title>
    <link rel="stylesheet" type="text/css" href="<? echo __WEB_ROOT__ . "public/Assets/css/authen.css" ?>">
</head>

<body>
    <div class="wrapper">
        <div class="container">

            <div class="description">
                <img width="500px" height="500px" src="<? echo __WEB_ROOT__ . "public/SVG/login.svg" ?>" />
            </div>
            <!-- form -->
            <div class="form-login">
                <div class="title">Đăng nhập với My Blog</div>
                <form method="post" action="<? echo $_SERVER['REDIRECT_URL'] == '/login/dologin' ? "dologin" : "login/dologin" ?>">
                    <input type="text" class="input login_username" name="username" placeholder="Tài khoản">
                    <p class="form-notification">
                        <!-- xử lý có lỗi thì return lỗi -->
                        <? if (isset($_SESSION['returnError'])) {
                            echo $_SESSION['returnError'];
                            //hiển thị xong thì xóa sesion
                            unset($_SESSION['returnError']);
                        } else {
                            echo "";
                        } ?>
                    </p>
                    <input type="password" class="input login_password" name="password" placeholder="Mật khẩu">
                    <p class="form-notification"></p>
                    <input type="submit" class="input login_submit" value="Đăng nhập">
                </form>
                <div class="sub">
                    <p class="sub_title">Bạn chưa có tài khoản? <a class="sub_link" href="/register">Tạo tài khoản</a></p>
                </div>
            </div>

        </div>
    </div>

    <? echo isset($error) ? $error : ''; ?>
    <script type="text/javascript" src="<? echo __WEB_ROOT__ . "public/Assets/js/authen.js" ?>"></script>
</body>


</html>