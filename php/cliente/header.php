<?php
    session_start();
    if(!isset($_SESSION['utilizador'])){
        header("Location: /geip/login.php");
        exit();
    }
?> 

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title><?= $titulo ?></title>
    <link rel="icon" type="image/png" href="/geip/resources/images/logo-geipe.png">
    <link rel="stylesheet" href="/geip/styles/cliente/base.css">
    <link rel="stylesheet" href="/geip/styles/cliente/banner.css">
    <link rel="stylesheet" href="/geip/styles/cliente/footer.css">
    <?php
        if (isset($css)) {
            echo '<link rel="stylesheet" href="' . $css . '">';
        }
    ?>
    <script src="https://kit.fontawesome.com/35842701b4.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'headerCont.php'; ?>