<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Post</title>
    <link rel="stylesheet" type="text/css" href="<? echo __WEB_ROOT__ . "public/Assets/css/detail.css" ?>">
    <script src="<? echo __WEB_ROOT__ . "public/Assets/js/home.js" ?>"></script>
</head>

<body>
    <div class="wrapper">
        <div class="nav">
            <div class="left">
                <a href="/"><img width="100px" height="100px" src="<? echo __WEB_ROOT__ . "public/Image/logo.png" ?>" alt="logo"></a>
                <a class="left_link" href="/">Home</a>
            </div>
            <div class="right">
                <? if (!isset($_COOKIE['id_user'])) : ?>
                    <a href="/register" class="right_button_register">Register</a>
                    <a href="/login" class="right_button_login">Login</a>

                <? else : ?>
                    <a href="/home/create-blog" class="right_icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg></a>

                    <img onclick="handleShowOptionAvt()" class="right_image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                <? endif ?>
            </div>
            <div class="sub_nav">
                <ul>
                    <li class="li"><svg class="li_icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        Log out</li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="container_left">
                <? echo $content[0]['content']  ?>
            </div>
            <div class="container_right">
                1s
            </div>
        </div>
    </div>

</body>

</html>