<?
!isset($_COOKIE['id_user']) && header("Location: /login");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tiny.cloud/1/ph7aym1hmnbtbgppbqr1q3x0r6py1un60atoscakavekq8tf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/createBlog.css" ?>">
    <link rel="stylesheet" href="<? echo __WEB_ROOT__ . "public/Assets/css/nav.css" ?>">
    <script src="<? echo __WEB_ROOT__ . "public/Assets/js/home.js" ?>"></script>
    <title>Tạo bài viết - MyBlog</title>
</head>

<body>
    <div class="wrapper">
        <!-- nav -->

        <?
        include ROOT . '/App/Components/nav.php' ?>



        <div class="container">
            <h1>Create Blog</h1>
            <div class="edit">
                <form class="edit_form" action="/home/save-blog" method="post">
                    <label for="title" class="edit_label">Post Title</label><br>
                    <div class="edit_input">
                        <input type="text" id="title" name="title" class="edit_input-postName">
                        <input type="submit" class="edit_input-submit" value="Publish Articles">
                    </div>
                    <textarea rows="34" name='content'>Welcome to TinyMCE!</textarea>

                </form>
            </div>
        </div>

        <!-- notification -->

        <div class="notification">
            <div class="notification_content">
                <img class="notification_img" src="data:image/png;base64,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">
                Bài viết đã được đăng thành công
            </div ">
        </div>
    </div>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
    <? if (isset($_SESSION['statusPost']) && $_SESSION['statusPost'] == 'successfully') { ?>
    <script>
    window.addEventListener('load',()=>{
        document.querySelector(" .notification").style.animation="noti 4s" }) </script>
        <? unset($_SESSION['returnErrorUser']);
    } ?>

        <div class="wrapper_2" onclick="handleShowOptionAvt()"></div>
</body>

</html>