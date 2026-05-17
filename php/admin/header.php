<?php
    session_start();
    if(!isset($_SESSION['utilizador']) || $_SESSION['tipo'] != 'admin'){
        header("Location: ../login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title><?= $titulo ?></title>
    <link rel="icon" type="image/png" href="../resources/images/logo-geipe.png">
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="stylesheet" href="../styles/admin/base.css">
    <link rel="stylesheet" href="../styles/banner.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <?php
        if (isset($css)) {
            echo '<link rel="stylesheet" href="../styles/' . $css . '">';
        }
    ?>
    <script src="https://kit.fontawesome.com/35842701b4.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'headerCont.php'; ?>