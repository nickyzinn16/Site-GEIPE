<?php
    include '../../php/conn.php';

    if(!isset($_GET['id'])){
        header("Location: ../../cliente/blog.php");
        exit();
    }

    $id = intval($_GET['id']);
    $resultado = mysqli_query($conn, "SELECT * FROM noticias WHERE id = $id AND publicada = 1");

    if(mysqli_num_rows($resultado) == 0){
        header("Location: ../../cliente/blog.php");
        exit();
    }

    $noticia = mysqli_fetch_assoc($resultado);

    $titulo = $noticia['titulo'] . " - GEIPE";
    $css = "/geip/styles/cliente/noticia.css";
    $paginaAtiva = "blog";
    include '../../php/cliente/header.php';
?>

<section class="banner-blog1">
    <div class="main-banner">
        <h1><?= $noticia['titulo'] ?></h1>
        <p><?= $noticia['resumo'] ?></p>
    </div>
</section>

<section class="conteudo-noticia">
    <div class="noticia-container">
        <h1><?= $noticia['titulo'] ?></h1>
        <p><?= $noticia['conteudo'] ?></p>
    </div>
</section>

<?php include '../../php/cliente/footer.php'; ?>

<button id="btn-topo">↑</button>
<script src="../../scripts/blog.js"></script>
<script src="../../scripts/botao.js"></script>