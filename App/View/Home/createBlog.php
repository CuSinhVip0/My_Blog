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
                    <textarea rows="45" name='content'>Welcome to TinyMCE!</textarea>

                </form>
            </div>
        </div>
    </div>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

    <div class="wrapper_2" onclick="handleShowOptionAvt()"></div>
</body>

</html>