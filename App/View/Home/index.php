<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - MyBlog</title>
    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/home.css" ?>">
    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/nav.css" ?>">
    <script src="<? echo __WEB_ROOT__ . "public/Assets/js/home.js" ?>"></script>
</head>


<body>
    <div class="wrapper">
        <?
        include ROOT . '/App/Components/nav.php' ?>

        <!-- Body -->
        <!-- <div class="container">
            <? foreach ($posts as $post) { ?>
                <div class="item">
                    <div class="item_img">
                        <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item2.jpg" ?>" alt="item2">
                    </div>
                    <div class="item_content">
                        <a href="/post/detail/<? echo $post['id'] ?>" class="item_title"><? echo $post['title'] ?></a>
                        <div class="item_author">
                            <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                            <div class="item_author-about">
                                <p class="about_name"><? echo $post["name"] ?></p>
                                <p class="about_time"><? echo date('M d, Y', strtotime($post['createAt'])) ?></p>
                            </div>
                            <p class="item_author-read">3 min read</p>
                        </div>
                    </div>
                </div>
            <? } ?>    -->


        <div class="container">
            <div class="container_left">
                <div class="right_title">BÀI VIẾT MỚI NHẤT</div>
                <ul class="container_left_item">
                    <? foreach ($posts as $post) { ?>
                        <li class="item">
                            <div class="item_left">
                                <img class="item_left_image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt=" user">
                            </div>
                            <div class="item_right">
                                <a href="/post/detail/<? echo $post['id'] ?>" class="item_title"><? echo $post['title'] ?> <span class="item_time"><? echo date('M d, Y', strtotime($post['createAt'])) ?></span></a>
                                <div class="item_right_below">
                                    <a href="/author/profile/<? echo $post["id_user"] ?>" class="item_author"> <svg class='item_icon' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                        <? echo $post["name"] ?></a>
                                    <div class="item_author"> <svg class='item_icon' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                        <? echo $post["luotxem"] ?></div>
                                </div>
                            </div>
                        </li>
                    <? } ?>
                </ul>
            </div>

            <div class="container_right">
                <? include ROOT . "/App/Components/postVip.php" ?>
            </div>
        </div>
    </div>

    <div class="wrapper_2" onclick="handleShowOptionAvt()"></div>

</body>

</html>