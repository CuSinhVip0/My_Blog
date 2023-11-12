<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up with My-Blog</title>
    <link rel="stylesheet" type="text/css" href="<? echo __WEB_ROOT__ . "public/Assets/css/authen.css" ?>">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <!-- form -->
            <div class="form-register">
                <div class="title">Đăng ký với My Blog</div>
                <form method="post" action="<? echo $_SERVER['REDIRECT_URL'] == '/register/doregister' ? "doregister" : "register/doregister" ?>">
                    <input type="text" class="input register_username" name="username" placeholder="Tài khoản">
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

                    <input type="password" class="input register_password" name="password" placeholder="Mật khẩu">
                    <p class="form-notification"></p>
                    <input type="password" class="input register_password-confirm" placeholder="Xác nhập mật khẩu">
                    <p class="form-notification"></p>
                    <input type="submit" class="input register_submit" value="Đăng ký">
                </form>
                <div class="sub">
                    <p class="sub_title">Bạn đã có tài khoản? <a class="sub_link" href="/login">Đăng nhập</a></p>
                </div>
            </div>
            <div class="description">
                <img width="500px" height="500px" src="<? echo __WEB_ROOT__ . "public/SVG/register.svg" ?>" />
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<? echo __WEB_ROOT__ . "public/Assets/js/authen.js" ?>"></script>

</body>

</html>