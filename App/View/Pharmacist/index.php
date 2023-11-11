<?
if (!isset($_SESSION['username'])) {
    include ROOT . '/App/Errors/404.php';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharamacist</title>
</head>

<body>
    <h1>Page Pharmacist</h1>
    <h1>Hello <?php echo $_SESSION['username']; ?></h1>
    <a href='/pharmacist/logout'>Logout</a>
</body>

</html>