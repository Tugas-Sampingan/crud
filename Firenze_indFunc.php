<?php
$background_color = '#8A8635';

if ($_POST) {
    $background_color = $_POST['background_color'];
} else {
    if (isset($_COOKIE['background-color'])) {
        $_POST['background_color'] = $background_color = $_COOKIE['background-color'];
    }
}

//hapus cookie
$message = false;
if (isset($_POST['hapus_cookie'])) {
    setcookie('background-color', '', 0, '/');
    $message = 'Setting background telah dihapus';
}

//set cookie 7 days
if (isset($_POST['remember'])) {
    setcookie('background-color', $_POST['background_color'], strotime(+7 days), '/');
    $message = 'Setting background berhasil diubah';
}
?>

<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title></title>
    </head>
</html>