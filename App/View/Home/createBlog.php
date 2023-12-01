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
    <title>Create blog</title>
</head>

<body>
    <div class="wrapper">
        <!-- nav -->
        <div class="nav">
            <div class="left">
                <a href="/"><img width="100px" height="100px" src="<? echo __WEB_ROOT__ . "public/Image/logo.png" ?>" alt="logo"></a>
                <a class="left_link" href="/">Home</a>
            </div>
            <div class="right">
                <a href="/home/create-blog" class="right_icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg></a>

                <img width="75px" src="<? echo __WEB_ROOT__ . "public/SVG/user.svg" ?>" alt="logo">
            </div>
        </div>



        <div class="container">
            <h1>Create Blog</h1>
            <div class="edit">
                <form class="edit_form" action="/home/save-blog" method="post">
                    <label for="title" class="edit_label">Post Title</label><br>
                    <div class="edit_input">
                        <input type="text" id="title" name="title" class="edit_input-postName">
                        <input type="submit" class="edit_input-submit" value="Publish Articles">
                    </div>
                    <textarea rows="40" name='content'>Welcome to TinyMCE!</textarea>

                </form>
            </div>
        </div>
    </div>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
</body>

</html>