<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyên khoa</title>
</head>

<body>
    <h1>Chuyên khoa</h1>
    <!-- <a href="/chuyen_khoa/tai_mui_hong.html">Tai mũi họng</a>
    <a href="/chuyen_khoa/rang_ham_mat.html">Răng hàm mặt</a>
    <a href="/chuyen_khoa/than_kinh.html">Thần kinh</a>
    <a href="/chuyen_khoa/chuan_doan_hinh_anh.html">Chuẩn đoán hình ảnh</a> -->


    <?
    if (!empty($listSpecialist)) {
        foreach ($listSpecialist as $v) {
            ?><a href="/chuyen_khoa/<?echo chuanHoaChuoi($v['ten'])?>.html"><? echo $v['ten']?></a></br><?
        }
    }
    ?>
</body>

</html>