<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - <? echo $content[0]['title'] ?> </title>
    <link rel="stylesheet" type="text/css" href="<? echo __WEB_ROOT__ . "public/Assets/css/detail.css" ?>">
    <link rel="stylesheet" type="text/css" href="<? echo __WEB_ROOT__ . "public/Assets/css/nav.css" ?>">
    <script src="<? echo __WEB_ROOT__ . "public/Assets/js/home.js" ?>"></script>
</head>

<body>
    <div class="wrapper">
        <? include ROOT . "/App/Components/nav.php" ?>


        <div class="container">
            <div class="container_left">
                <div class="container_left_item">
                    <div class="left_author_info">
                        <div class="left_author">
                            <div class="left_author_img">
                                <img class="left_author_img_i" src="<? echo __WEB_ROOT__ . "public/Image/user.png" ?>" alt="user">
                            </div>
                            <div class="left_author_about">
                                <a href="/author/profile/<? echo $content[0]['id_user'] ?>" class="left_author_name"><? echo $content[0]['name'] ?></a>
                                <button class="left_author_follow">Follow</button>
                            </div>
                        </div>
                        <div class="left_author_des">
                            <div class="left_author_date"> <? echo date('M d,Y', strtotime($content[0]['createAt'])) ?></div>
                            <div class="left_author_see"> <svg class='item_icon' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <? echo $content[0]['luotxem'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="left_title"><? echo $content[0]['title'] ?></div>
                    <div class="left_body">
                        <? echo $content[0]['content']  ?>
                    </div>
                </div>
            </div>
            <div class="container_right">
                <? include ROOT . "/App/Components/postVip.php" ?>
            </div>
        </div>

    </div>
    <div class="wrapper_2" onclick="handleShowOptionAvt()"></div>

</body>

</html>