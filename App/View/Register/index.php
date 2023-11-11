<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <h1>Trang dang ki</h1>
    <form method="post" action="<? echo $_SERVER['REDIRECT_URL']=='/register/doregister' ? "doregister": "register/doregister"?>" >
        <input type="text" name="username" placeholder="Enter usrename...">
        <input type="password" name="password" placeholder="Enter password...">
        <input type="submit" name="Register">

    </form>
    <? echo isset($error) ? $error : '' ?>
</body>

</html>