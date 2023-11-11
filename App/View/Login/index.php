<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Trang login</h1>
    <form method="post" action="<? echo $_SERVER['REDIRECT_URL']=='/login/dologin' ? "dologin": "login/dologin"?>">
        <input type="text" name="username" placeholder="Enter usrename...">
        <input type="password" name="password" placeholder="Enter password...">
        <input type="submit" name="LOGIN">
    </form>
    <? echo isset($error)?$error:'';?>
</body>
</html>