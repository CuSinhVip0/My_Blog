<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/home.css" ?>">
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
                    <li><a class="li" href="/home/logout"><svg class="li_icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            Log out</a></li>
                </ul>
            </div>
        </div>

        <!-- Body -->
        <div class="container">
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


            <? } ?>




            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item1.png" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <a href="/post/detail/1" class="item_title">Fundamental Of javascript</a>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item1.png" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <a href="/post/detail/2" class="item_title">Fundamental Of javascript</a>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item1.png" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item1.png" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item1.png" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item1.png" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item3.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_img">
                    <img class="img-size" src="<? echo __WEB_ROOT__ . "public/Image/item/item2.jpg" ?>" alt="item1">
                </div>
                <div class="item_content">
                    <div class="item_title">Fundamental Of javascript</div>
                    <div class="item_author">
                        <img class="item_author-image" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
                        <div class="item_author-about">
                            <p class="about_name">Dasteen</p>
                            <p class="about_time">Jan 10, 2022</p>
                        </div>
                        <p class="item_author-read">3 min read</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="wrapper_2" onclick="handleShowOptionAvt()"></div>

</body>

</html>