<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <? echo $inforUser[0]['name'] ?> </title>
    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/nav.css" ?>">
    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/profile.css" ?>">
    <script src="<? echo __WEB_ROOT__ . "public/Assets/js/home.js" ?>"></script>
    <script src="<? echo __WEB_ROOT__ . "public/Assets/js/like.js" ?>"></script>
</head>


<body>
    <div class="wrapper">
        <?
        include ROOT . '/App/Components/nav.php' ?>

        <div class="container">
            <div class="container_author">
                <div class="author">
                    <img class="author_img" src="<? echo __WEB_ROOT__ . "public/Image/user.png" ?>" alt="user">
                    <div class="author_name">
                        <p class="author_name_title"><? echo $inforUser[0]['name'] ?></p>
                        <p class="author_name_id">#<? echo $inforUser[0]['id_user'] ?></p>
                    </div>
                </div>
            </div>
            <div class="container_menu">
                <ul class="menu_items">
                    <li class="menu_item">Bài viết</li>
                    <li class="menu_item">Người theo dõi</li>
                    <li class="menu_item">Đang theo dõi</li>
                    <li class="menu_item">Bài viết đã thích</li>
                    <li class="menu_item">Bài viết đã xem</li>
                </ul>
            </div>
            <div class="container_content">
                <ul class="content_items">
                    <? foreach ($posts as $post) { ?>
                        <li class="item">
                            <a href="/post/detail/<? echo $post['id'] ?>" class="item_title"><? echo $post['title'] ?><span class="item_status"><?
                                                                                                                                                if ($post['trangthai'] == 0) echo  "Chờ xét duyệt";
                                                                                                                                                else if ($post['trangthai'] == 1) echo "Công khai";
                                                                                                                                                else if ($post['trangthai'] == 2) echo "Không được duyệt";
                                                                                                                                                ?></span></a>
                            <div class="item_right_below">
                                <div class="item_author"> <svg class='item_icon' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <? echo $post['luotxem'] ?> </div>
                                <div class="item_day"><? echo date('M d, Y', strtotime($post['createAt']))  ?></div>
                                <?;
                                $postlike = null;
                                if (isset($_COOKIE['id_user'])) {
                                    $postlike = $model_like->getPostwithLikeforUser($_COOKIE['id_user'], $post['id']);
                                }
                                if ($postlike) { ?>
                                    <div id='post_like_<? echo $post['id'] ?>' class=" item_author" onclick="tym('<? echo $post['id'] ?>')">
                                        <svg id='like' class="item_icon item_tym show" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                        </svg>
                                        <svg id='unlike' class="item_icon item_tym" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </div>
                                <?
                                } else {
                                ?>
                                    <div id='post_like_<? echo $post['id'] ?>' class=" item_author" onclick="tym('<? echo $post['id'] ?>')">
                                        <svg id='unlike' class="item_icon item_tym show" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                        <svg id='like' class="item_icon item_tym" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                        </svg>
                                    </div>
                                <?
                                } ?>
                            </div>
                            <div class="content">
                                <? echo $post['content'] ?>
                            </div>
                            <div class="read">
                                <a href="/post/detail/<? echo $post['id'] ?>" class="read_btn">Xem thêm</a>
                            </div>
                        </li>
                    <? } ?>
                </ul>
            </div>

        </div>

    </div>

    <div class="wrapper_2" onclick="handleShowOptionAvt()"></div>

</body>

</html>