<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <? if (!isset($_COOKIE['username'])) : ?>
        <h1>Hello world </h1>
        <a href="/login">Login</a>
        <a href="/register">Register</a>

    <? else : ?>
        <h1>Hello <? echo $_COOKIE['username']; ?></h1>
        <a href='/home/logout'>Logout</a>
        <a href='/home/profile'>Profile</a>
       

    <? endif ?>
    <a href='/chuyen_khoa'>Chuyên khoa</a>

</body>

</html>