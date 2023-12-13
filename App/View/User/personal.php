<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân - MyBlog</title>
    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/nav.css" ?>">
    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/user.css" ?>">
    <script src="<? echo __WEB_ROOT__ . "public/Assets/js/home.js" ?>"></script>
</head>


<body>
    <div class="wrapper">
        <?
        include ROOT . '/App/Components/nav.php' ?>

        <div class="container">
            <div class="container_left">
                <a href="/u/profile/<? echo $inforUser[0]['id_user'] ?>" class="left_title"> <svg class="left_icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>

                    Trang chủ</a>
                <div class="left_title"> <svg class="left_icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z" />
                    </svg>

                    Thông tin của tôi</div>
                <ul class="left_items">
                    <li class="left_item check"><a href=""><svg class="left_icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            Thông tin cá nhân
                        </a></li>
                    <li class="left_item "><a href=""><svg class="left_icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                            </svg>

                            Thông tin liên lạc</a></li>
                </ul>
            </div>
            <div class="container_right">
                <div class="right_title">
                    <div class="right_title-name">Thông tin cá nhân</div>
                    <div class="right_title-name2">Quản lý thông tin cá nhân của bạn</div>
                </div>

                <div class="body_image">
                    <div class="body_image_container">
                        <img class="img" src="<? echo (($inforUser[0]['hinh']) != null) ? __WEB_ROOT__ . "/public/Image/" . $inforUser[0]['hinh'] : __WEB_ROOT__ . "/public/SVG/user.svg" ?>" alt="user" onclick="document.querySelector('#file_image').click()">

                        <!-- <button class="body_image_btn">Thay đổi</button> -->
                        <form id='form_img' method="post" action="/u/personal/changeImage" enctype="multipart/form-data">
                            <label for="id_image" class="body_image_btn" onclick="document.querySelector('#file_image').click()">
                                Thay đổi
                                <input id='file_image' name="file_image" type="file" style="height: 0px;width: 0px; overflow:hidden;" onchange="handleChangeFile(this)">
                            </label>
                        </form>
                        <a href="/u/personal/removeImage" class="body_image_btn btn_2">Xóa hình đại diện</a>
                    </div>

                </div>
                <form id="form" method="post" action="/u/personal/update" class="right_body">
                    <div class="body_infor">
                        <div class="body_infor_title">Tên hiển thị</div>
                        <input type="text" class="body_infor_input black" name="name" value="<? echo $inforUser[0]['name'] ?>" placeholder="Nguyen Van A">
                    </div>
                    <div class="body_infor_container">
                        <div class="body_infor">
                            <div class="body_infor_title">Ngày sinh</div>
                            <input type="date" class="body_infor_input" value="<? echo date("Y-m-d", strtotime($inforUser[0]['birth'])) ?>" name='birth'>
                        </div>
                        <div class="body_infor">
                            <div class="body_infor_title">Giới tính</div>
                            <select class="body_infor_input" name='sex'>
                                <option <? if ($inforUser[0]['sex'] == 'Nam') echo "selected" ?> value="Nam">Nam</option>
                                <option <? if ($inforUser[0]['sex'] == 'Nu') echo "selected" ?> value="Nu">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="body_infor_button">
                        <button class="button btn-color1" onclick="handleBackHome('<? echo $_COOKIE['id_user'] ?>')">Thoát</button>
                        <button class="button btn-color2 " onclick="handleUpdate()">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="wrapper_2" onclick="handleShowOptionAvt()"></div>
    <script>
        function handleChangeFile(a) {
            const reader = new FileReader();
            reader.readAsDataURL(a.files[0]);
            reader.addEventListener("load", (event) => {
                // Lấy chuỗi Binary thông tin hình ảnh
                const img = event.target.result;
                document.querySelector(".img").src = img
            })
            document.getElementById("form_img").submit()
        }
    </script>
</body>

</html>