<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .active {
            display: none;
        }
    </style>
</head>

<body>
    <h1>Page Profile</h1>

    <div class="infor">
        <p>Name: <? echo isset($inforUser[0]['name']) ?  $inforUser[0]['name'] : "" ?></p>
        <p>Birth: <? echo isset($inforUser[0]['birth']) ?  $inforUser[0]['birth'] : "" ?></p>
        <p>Sex: <? echo isset($inforUser[0]['sex']) ?  $inforUser[0]['sex'] : "" ?></p>
    </div>


    <button onclick="handleToggle()">Edit profile</button>
    <form method="post" action="/home/editprofile" class="form active">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name..."></br>
        <label for="birth">Birth:</label>
        <input type="date" name="birth" id="birth"></br>
        <label for="sex">Sex:</label>
        <select name="sex" id="sex">
            <option value="Nam">Nam</option>
            <option value="Nu">Nu</option>
        </select></br>
        <button type="submit">Save</button>
    </form>
    <a href="/home">Home</a>


    <script type="text/javascript">
        function handleToggle() {
            const form = document.querySelector('form');
            form.classList.toggle('active');
        }
    </script>
</body>

</html>